function makeInnerLinks()
{
	var pre="I";
	var val="";
	var isH3=false;
	var v="";
	$("#contents h2,#contents h3").each(function(index, element){
		var html=$(element).html();

		// ancor
		var innerName= pre + index;
		v='<a name="' + innerName + '" href="#'+innerName+'">'
		+ '<span class="glyphicon glyphicon-link" style="font-size: small; margin-left: 3px;"></span>'
		+ '</a>';
		$(element).html(html + v);

		// menu
		if(element.nodeName == "H3"){
			if(!isH3){
				isH3=true;
				val += "<ul>";
			}
		} else {
			if(isH3){
				if(val) {
					val += "</ul>";
				}
			}
			isH3=false;
		}
		val += '<li><a href="#' + innerName + '">' + html + "</a></li>";
	});

	if(val) {
		if(isH3) {
			val += "</ul>";
		}
		v='<div id="innerLinksToggle" style="'
		+ 'position: absolute;'
		+ ' top: -1px;'
		+ ' right: -1px;'
		+ ' border: solid 1px #333;'
		+ ' background-color: #f5f5f5;'
		+ ' width: 15px;'
		+ ' height: 15px;'
		+ ' text-align: center;">'
		+ '<span class="glyphicon glyphicon-minus-sign"></span>'
		+ '</div>'
		+ '<div id="innerLinksContents">'
		+ '<span style="font-weight: bold; font-style: italic;">InnerLinks :</span>'
		+ '<ul>' + val + '</ul>'
		+ '<div>';
		$("#innerLinks").html(v);

		// toggle setting
		$("#innerLinksToggle").click(function(){
			$("#innerLinks #innerLinksContents").toggle(500);
		});
	}
}

$(function(){
	makeInnerLinks();
});

