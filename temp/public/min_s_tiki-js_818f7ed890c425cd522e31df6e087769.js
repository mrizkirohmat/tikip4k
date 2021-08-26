function tr(str){if(typeof lang!=="undefined"&&typeof lang[str]=='string'){return lang[str]}else{return str}}
var lang={};function browser(){var b=navigator.appName;if(b=="Netscape"){this.b="ns"}else{this.b=b}
this.version=navigator.appVersion;this.v=parseInt(this.version,10);this.ns=(this.b=="ns"&&this.v>=5);this.op=(navigator.userAgent.indexOf('Opera')>-1);this.safari=(navigator.userAgent.indexOf('Safari')>-1);this.op7=(navigator.userAgent.indexOf('Opera')>-1&&this.v>=7);this.ie56=(this.version.indexOf('MSIE 5')>-1||this.version.indexOf('MSIE 6')>-1);this.ie567=(this.version.indexOf('MSIE 5')>-1||this.version.indexOf('MSIE 6')>-1||this.version.indexOf('MSIE 7')>-1);this.iewin=(this.ie56&&navigator.userAgent.indexOf('Windows')>-1);this.iewin7=(this.ie567&&navigator.userAgent.indexOf('Windows')>-1);this.iemac=(this.ie56&&navigator.userAgent.indexOf('Mac')>-1);this.moz=(navigator.userAgent.indexOf('Mozilla')>-1);this.moz13=(navigator.userAgent.indexOf('Mozilla')>-1&&navigator.userAgent.indexOf('1.3')>-1);this.oldmoz=(navigator.userAgent.indexOf('Mozilla')>-1&&navigator.userAgent.indexOf('1.4')>-1||navigator.userAgent.indexOf('Mozilla')>-1&&navigator.userAgent.indexOf('1.5')>-1||navigator.userAgent.indexOf('Mozilla')>-1&&navigator.userAgent.indexOf('1.6')>-1);this.ns6=(navigator.userAgent.indexOf('Netscape6')>-1);this.docom=(this.ie56||this.ns||this.iewin||this.op||this.iemac||this.safari||this.moz||this.oldmoz||this.ns6)}
function toggle_dynamic_var(name){var displayContainer=document.getElementById('dyn_'+name+'_display');var editContainer=document.getElementById('dyn_'+name+'_edit');var form=document.createElement('form');form.setAttribute('method','post');form.setAttribute('name','dyn_vars');form.style.display="inline";editContainer.parentNode.insertBefore(form,editContainer);form.appendChild(editContainer);if(displayContainer.style.display=="none"){editContainer.style.display="none";displayContainer.style.display="inline"}else{displayContainer.style.display="none";editContainer.style.display="inline"}}
function chgArtType(){var articleType=document.getElementById('articletype').value;var typeProperties=articleTypes[articleType];var propertyList=['show_topline','y','show_subtitle','y','show_linkto','y','show_author','y','use_ratings','y','heading_only','n','show_image_caption','y','show_pre_publ','y','show_post_expire','y','show_image','y','show_expdate','y'];if(typeof articleCustomAttributes!='undefined'){propertyList=propertyList.concat(articleCustomAttributes)}
var l=propertyList.length,property,value,display;for(var i=0;i<l;i++){property=propertyList[i++];value=propertyList[i];if(typeProperties[property]==value||(!typeProperties[property]&&value=="n")){display=""}else{display="none"}
if(document.getElementById(property)){document.getElementById(property).style.display=display}else{var j=1;while(document.getElementById(property+'_'+j)){document.getElementById(property+'_'+j).style.display=display;j++}}}}
function toggleSpan(id){$("#"+id).toggle()}
function toggleBlock(id){$("#"+id).toggle()}
function toggleTrTd(id){$("#"+id).toggle()}
function changeText(el,newText){if(el.innerText){el.innerText=newText}else if(el.firstChild&&el.firstChild.nodeValue){el.firstChild.nodeValue=newText}}
function toggleToc(){var toc=document.getElementById('toc').getElementsByTagName('ul')[0];if(toc&&toc.style.display=='none'){toc.style.display='block'}else{toc.style.display='none'}}
function chgTrkFld(f,o){var opt=0;document.getElementById('z').style.display="none";document.getElementById('zDescription').style.display="";document.getElementById('zStaticText').style.display="none";document.getElementById('zStaticTextToolbars').style.display="none";for(var i=0;i<f.length;i++){var c=f.charAt(i);if(document.getElementById(c)){var ichoiceParent=document.getElementById('itemChoicesRow');var ichoice=document.getElementById(c+'itemChoices');if(c==o){document.getElementById(c).style.display="";document.getElementById('z').style.display="block";if(c=='S'){document.getElementById('zDescription').style.display="none";document.getElementById('zStaticText').style.display="";document.getElementById('zStaticTextToolbars').style.display=""}
if(ichoice){ichoice.style.display="";ichoiceParent.style.display=""}else{ichoiceParent.style.display="none"}}else{document.getElementById(c).style.display="none";if(ichoice){ichoice.style.display="none"}}}}}
function chgTrkLingual(item){document.getElementById("multilabelRow").style.display=(item=='t'||item=='a')?'':'none'}
function multitoggle(f,o){for(var i=0;i<f.length;i++){if(document.getElementById('fid'+f[i])){if(f[i]==o){document.getElementById('fid'+f[i]).style.display="block"}else{document.getElementById('fid'+f[i]).style.display="none"}}}}
function setMenuCon(foo){var it=foo.split(",");document.getElementById('menu_url').value=it[0];document.getElementById('menu_name').value=it[1];if(it[2]){document.getElementById('menu_section').value=it[2]}else{document.getElementById('menu_section').value=''}
if(it[3]){document.getElementById('menu_perm').value=it[3]}else{document.getElementById('menu_perm').value=''}
flip('weburls')}
function genPass(w1){var lower,upper,num,other,l,p,pstr,i,letter,j,temp;lower='abcdefghijklmnopqrstuvwxyz';upper='ABCDEFGHIJKLMNOPQRSTUVWXYZ';num='0123456789';other='_$%#!@*+';l=8;p=[];for(i=0;i<l;i++){if(i<2){letter=lower.charAt(Math.round(Math.random()*(lower.length-1)))}else if(i<4){letter=upper.charAt(Math.round(Math.random()*(upper.length-1)))}else if(i<6){letter=num.charAt(Math.round(Math.random()*(num.length-1)))}else{letter=other.charAt(Math.round(Math.random()*(other.length-1)))}
p[i]=letter}
for(i=p.length-1;i>0;i--){j=Math.floor(Math.random()*(i+1));temp=p[i];p[i]=p[j];p[j]=temp}
pstr=p.join('');document.getElementById(w1).value=pstr}
function setUserModule(foo1){document.getElementById('usermoduledata').value=foo1}
function replaceLimon(vec){document.getElementById(vec[0]).value=document.getElementById(vec[0]).value.replace(vec[1],vec[2])}
function setSelectionRange(textarea,selectionStart,selectionEnd){var $textareaEditor=syntaxHighlighter.get($(textarea));if($textareaEditor){syntaxHighlighter.setSelection($textareaEditor,selectionStart,selectionEnd);return}
$(textarea).selection(selectionStart,selectionEnd)}
function getTASelection(textarea){var $textareaEditor=syntaxHighlighter.get($(textarea));if($textareaEditor){return $textareaEditor.getSelection()}
var ta_id=$(textarea).attr("id"),r,cked,output;if(cked=typeof CKEDITOR!=='undefined'?CKEDITOR.instances[ta_id]:null){return cked.getSelection().getSelectedText()}else{if(typeof $(textarea).attr("selectionStartSaved")!='undefined'&&$(textarea).attr("selectionStartSaved")){return textarea.value.substring($(textarea).attr("selectionStartSaved"),$(textarea).attr("selectionEndSaved"))}else if((typeof textarea!='undefined')&&(typeof textarea.selectionStart!='undefined')){return textarea.value.substring(textarea.selectionStart,textarea.selectionEnd)}else{r=document.selection.createRange();return r.text}}}
var ieFirstTimeInsertKludge=null;function storeTASelection(area_id){if(typeof CKEDITOR==='undefined'||typeof CKEDITOR.instances[area_id]==='undefined'){var $el=$("#"+area_id);var sel=$el.selection();$el.attr("selectionStartSaved",sel.start).attr("selectionEndSaved",sel.end).attr("scrollTopSaved",$el.attr("scrollTop"))}
if(ieFirstTimeInsertKludge===null){ieFirstTimeInsertKludge=!0}}
function setCaretToPos(textarea,pos){setSelectionRange(textarea,pos,pos)}
function getCaretPos(textarea){var $textareaEditor=syntaxHighlighter.get($(textarea));if($textareaEditor){var endPoint=$textareaEditor.cursorCoords();return(endPoint.x?endPoint.x:0)}
if(typeof textarea.selectionEnd!='undefined'){return textarea.selectionEnd}else if(document.selection){textarea.focus();var range=document.selection.createRange();if(range===null){return 0}
var re=textarea.createTextRange();var rc=re.duplicate();re.moveToBookmark(range.getBookmark());rc.setEndPoint('EndToStart',re);return rc.text.length?rc.text.length:0}else{return 0}}
function insertAt(elementId,replaceString,blockLevel,perLine,replaceSelection){var $textarea=$('#'+elementId);var $textareaEditor=syntaxHighlighter.get($textarea);var toBeReplaced=/text|page|area_id/g;var hiddenParents=$textarea.parents('fieldset:hidden:last');if(hiddenParents.length){hiddenParents.show()}
if($textareaEditor){syntaxHighlighter.insertAt($textareaEditor,replaceString,perLine,blockLevel,replaceSelection);return}else if(typeof CKEDITOR!=='undefined'&&CKEDITOR.instances[elementId]){var cked=CKEDITOR.instances[elementId];if(cked){var isPlugin=replaceString.match(/^\s?\{/m);if(isPlugin){isPlugin=replaceString.match(/\}\s?$/m)}
isPlugin=isPlugin&&isPlugin.length>0;var sel=cked.getSelection(),rng;if(sel){rng=sel.getRanges();if(rng.length){rng=rng[0]}}
var plugin_el,com;if(isPlugin&&rng&&!rng.collapsed){com=cked.getSelection().getStartElement();if(typeof com!=='undefined'&&com&&com.$){while(!$(com.$).hasClass("tiki_plugin")&&com.$.nextSibling&&com.$!==rng.endContainer.$){com=new CKEDITOR.dom.element(com.$.nextSibling);if($(com.$).hasClass("tiki_plugin")||$(com.$).find(".tiki_plugin").length===0){break}}
if(!$(com.$).hasClass("tiki_plugin")){plugin_el=$(com.$).find(".tiki_plugin");if(plugin_el.length==1){com=new CKEDITOR.dom.element(plugin_el[0])}else{plugin_el=$(com.$).parents(".tiki_plugin:last");if(plugin_el.length==1){com=new CKEDITOR.dom.element(plugin_el[0])}else{var plugin_type=replaceString.match(/^\s?\{([\w]+)/);if(plugin_type.length>1){plugin_type=plugin_type[1].toLowerCase()}
plugin_el=$(com.$).find("[plugin="+plugin_type+"].tiki_plugin");if(plugin_el.length==1){com=new CKEDITOR.dom.element(plugin_el[0])}else{}}}}}
if(com&&com.hasClass("tiki_plugin")){var html=cked.getData().replace(com.data("syntax"),replaceString);cked.setData(html);return}}
try{cked.insertText(replaceString)}catch(e){prompt(tr("Development notice: The editor selection has been lost, here is the text to insert."),replaceString);return}
if(typeof cked.reParse==="function"&&(isPlugin||replaceString.match(/^\s?\(\(.*?\)\)\s?$/)||replaceString.match(/^||.*||$/))){var bookmarks=cked.getSelection().createBookmarks2(!0);cked.reParse();cked.getSelection().selectBookmarks(bookmarks)}}
return}
if(!$textarea.length&&elementId==="fgal_picker"){$(".cke_dialog_contents").find("input:first").val(replaceString.replace("&amp;","&"));return}else if($textarea.is(":input")&&elementId==="fgal_picker_id"){$textarea.val(replaceString);return}
$textarea.focus();var val=$textarea.val();var selection=$textarea.selection();var scrollTop=$textarea[0].scrollTop;if(selection.start===0&&selection.end===0&&typeof $textarea.attr("selectionStartSaved")!='undefined'){if($textarea.attr("selectionStartSaved")){selection.start=$textarea.attr("selectionStartSaved");selection.end=$textarea.attr("selectionEndSaved");if($textarea.attr("scrollTopSaved")){scrollTop=$textarea.attr("scrollTopSaved");$textarea.attr("scrollTopSaved","")}
$textarea.attr("selectionStartSaved","").attr("selectionEndSaved","")}else{selection.start=getCaretPos($textarea[0]);selection.end=selection.start}}
var lines,startoff=0,endoff=0;if($textarea[0].createTextRange&&$textarea[0].value!==val){val=$textarea[0].value;if(val.substring(selection.start,selection.start+1)==="\n"){selection.start++}
lines=val.substring(0,selection.start).match(/\r\n/g);if(lines){startoff-=lines.length}}
var selectionStart=selection.start;var selectionEnd=selection.end;if(blockLevel){selectionStart=val.lastIndexOf("\n",selectionStart-1)+1;var blockEnd=val.indexOf("\r",selectionEnd);if(blockEnd<0){selectionEnd=val.indexOf("\n",selectionEnd)}else{selectionEnd=blockEnd}
if(selectionEnd<0){selectionEnd=val.length}}
var newString='';if((selectionStart!=selectionEnd)&&!$textareaEditor){if(perLine){lines=val.substring(selectionStart,selectionEnd).split("\n");for(var k=0;lines.length>k;++k){if(lines[k].length!==0){newString+=replaceString.replace(toBeReplaced,lines[k])}
if(k!=lines.length-1){newString+="\n"}}}else{if(replaceSelection){newString=replaceString}else if(replaceString.match(toBeReplaced)){newString=replaceString.replace(toBeReplaced,val.substring(selectionStart,selectionEnd))}else{newString=replaceString+'\n'+val.substring(selectionStart,selectionEnd)}}
$textarea.val(val.substring(0,selectionStart)+newString+val.substring(selectionEnd));lines=newString.match(/\r\n/g);if(lines){endoff-=lines.length}
setSelectionRange($textarea[0],selectionStart+startoff,selectionStart+startoff+newString.length+endoff)}else{$textarea.val(val.substring(0,selectionStart)+replaceString+val.substring(selectionEnd));lines=replaceString.match(/\r\n/g);if(lines){endoff-=lines.length}
setCaretToPos($textarea[0],selectionStart+startoff+replaceString.length+endoff)}
$textarea.attr("scrollTop",scrollTop);if(this.iewin&&ieFirstTimeInsertKludge){setTimeout(function(){if(newString.length){setSelectionRange($textarea[0],parseInt(selectionStart,10)+parseInt(startoff,10),parseInt(selectionStart,10)+parseInt(startoff,10)+newString.length+parseInt(endoff,10))}
$textarea.attr("scrollTop",scrollTop)},1000);ieFirstTimeInsertKludge=!1}
if(hiddenParents.length){hiddenParents.hide()}
if(typeof auto_save==="function"){auto_save(elementId)}}
function setUserModuleFromCombo(id,textarea){document.getElementById(textarea).value=document.getElementById(textarea).value+document.getElementById(id).options[document.getElementById(id).selectedIndex].value}
function toggle(foo){var display=$("#"+foo).css('display');if(display=="none"){show(foo,!0,"menu")}else{if(display=="block"){hide(foo,!0,"menu")}else{show(foo,!0,"menu")}}}
function flip_thumbnail_status(id){var elem=document.getElementById(id);if(elem.className=='thumbnailcontener'){elem.className+=' thumbnailcontenerchecked'}else{elem.className='thumbnailcontener'}}
function flip_class(itemid,class1,class2){var elem=document.getElementById(itemid);if(elem&&typeof elem!='undefined'){elem.className=elem.className==class1?class2:class1;setCookie('flip_class_'+itemid,elem.className)}}
function tikitabs(focus,tabElement){var container,ofocus=focus;if(typeof tabElement==="undefined"){container=$(".tabset:first")}else{container=$(tabElement).parents(".tabset:first")}
if(focus>$("> .tabs .tabmark",container).length){focus=1}
while($("> .tabs .tabmark.tab"+focus+":first",container).is(":hidden")){focus++}
if($("> .tabs .tabmark.tab"+focus+":first",container).length===0){focus=ofocus}
$("> .tabs .tabmark:not(.tab"+focus+":first)",container).removeClass("tabactive");$("> .tabs .tabmark.tab"+focus+":first",container).addClass("tabactive");$("> .tabcontent:not(.content"+focus+":first)",container).hide();$("> .tabcontent.content"+focus+":first",container).show();setCookie($(".tabs:first",container).data("name"),focus,"tabs","session")}
function setfolderstate(foo,def,img,status){if(!status){status=getCookie(foo,"menu","o")}
if(!img){if(document.getElementsByName('icn'+foo)[0].src.search(/[\\\/]/)){img=document.getElementsByName('icn'+foo)[0].src.replace(/.*[\\\/]([^\\\/]*)$/,"$1")}else{img='folder.png'}}
var src=img;if(status=='c'){hide(foo,!1,"menu")}else{show(foo,!1,"menu")}
if(status=='c'&&def!='d'){src=src.replace(/^o/,'')}else if(status!='c'&&def=='d'&&src.indexOf('o')!==0){src='o'+img}
document.getElementsByName('icn'+foo)[0].src=document.getElementsByName('icn'+foo)[0].src.replace(/[^\\\/]*$/,src)}
function setheadingstate(foo){var status=getCookie(foo,"showhide_headings");var $foo=$("#"+foo);if(status=="o"){$foo.show();collapseSign("flipper"+foo)}else if(status=="c"){$foo.hide();expandSign("flipper"+foo)}}
function setsectionstate(foo,def,img,status){var src;if(!status){status=getCookie(foo,"menu","o")}
if(status=="o"){show(foo);if(img){src="o"+img}}else if(status!="c"&&def!='d'){show(foo);if(img){src="o"+img}}else{hide(foo);if(img){src=img}}
if(img&&document.getElementsByName('icn'+foo).length){document.getElementsByName('icn'+foo)[0].src=document.getElementsByName('icn'+foo)[0].src.replace(/[^\\\/]*$/,src)}}
function icntoggle(foo,img){var $icn=$("#icn"+foo);var src=$icn.attr("src");if(!src){src=""}
if(!img){if(src.search(/[\\\/]/)){img=src.replace(/.*[\\\/]([^\\\/]*)$/,"$1")}else{img='folder.png'}}
if($("#"+foo+":hidden").length){show(foo,!0,"menu");$icn.attr("src",src.replace(/[^\\\/]*$/,'o'+img))}else{hide(foo,!0,"menu");img=img.replace(/(^|\/|\\)o(.*)$/,'$1$2');$icn.attr("src",src.replace(/[^\\\/]*$/,img))}}
function icontoggle(foo,clicked){if($("#"+foo+":hidden").length){show(foo,!0,"menu")}else{hide(foo,!0,"menu")}
var id=clicked.id;$('#'+id+' .toggle-open').toggle();$('#'+id+' .toggle-closed').toggle();return!1}
function getHttpRequest(method,url,async){if(async===undefined){async=!1}
var request;if(window.XMLHttpRequest){request=new XMLHttpRequest()}else if(window.ActiveXObject){try
{request=new ActiveXObject("Microsoft.XMLHTTP")}catch(ex){request=new ActiveXObject("MSXML2.XMLHTTP")}}else{return!1}
if(!request){return!1}
request.open(method,url,async);return request}
function setSessionVar(name,value){var request=getHttpRequest("GET","tiki-cookie-jar.php?"+name+"="+tiki_encodeURIComponent(value));request.send('');if(tiki_cookie_jar){tiki_cookie_jar[name]=value}}
function setCookie(name,value,section,expires,path,domain,secure){if(getCookie(name,section)==value){return!0}
if(!expires){expires=new Date();expires.setFullYear(expires.getFullYear()+1)}
if(expires==="session"){expires=""}
if(typeof jqueryTiki!="undefined"&&jqueryTiki.no_cookie){var request=getHttpRequest("GET","tiki-cookie-jar.php?"+name+"="+encodeURIComponent(value));try{request.send('');tiki_cookie_jar[name]=value;return!0}catch(ex){setCookieBrowser(name,value,section,expires,path,domain,secure);return!1}}else{setCookieBrowser(name,value,section,expires,path,domain,secure);return!0}}
function setCookieBrowser(name,value,section,expires,path,domain,secure){if(section){var valSection=getCookie(section);var name2="@"+name+":";if(valSection){if(new RegExp(name2).test(valSection)){valSection=valSection.replace(new RegExp(name2+"[^@;]*"),name2+value)}else{valSection=valSection+name2+value}
setCookieBrowser(section,valSection,null,expires,path,domain,secure)}else{valSection=name2+value;setCookieBrowser(section,valSection,null,expires,path,domain,secure)}}else{var curCookie=name+"="+encodeURIComponent(value)+((expires)?"; expires="+expires.toGMTString():"")+((path)?"; path="+path:"")+((domain)?"; domain="+domain:"")+((secure)?"; secure":"");document.cookie=curCookie}}
function getCookie(name,section,defval){if(typeof jqueryTiki!="undefined"&&jqueryTiki.no_cookie&&(window.XMLHttpRequest||window.ActiveXObject)&&typeof tiki_cookie_jar!="undefined"&&tiki_cookie_jar.length>0){if(typeof tiki_cookie_jar[name]=="undefined"){return defval}
return tiki_cookie_jar[name]}else{return getCookieBrowser(name,section,defval)}}
function getCookieBrowser(name,section,defval){if(typeof defval==="undefined"){defval=null}
if(section){var valSection=getCookieBrowser(section);if(valSection){var name2="@"+name+":";var val=valSection.match(new RegExp(name2+"([^@;]*)"));if(val){return decodeURIComponent(val[1])}else{return defval}}else{return defval}}else{var dc=document.cookie;var prefix=name+"=";var begin=dc.indexOf("; "+prefix);if(begin==-1){begin=dc.indexOf(prefix);if(begin!==0){return defval}}else{begin+=2}
var end=document.cookie.indexOf(";",begin);if(end==-1){end=dc.length}
return decodeURIComponent(dc.substring(begin+prefix.length,end))}}
function deleteCookie(name,section,expires,path,domain,secure){if(section){var valSection=getCookieBrowser(section);var name2="@"+name+":";if(valSection){if(new RegExp(name2).test(valSection)){valSection=valSection.replace(new RegExp(name2+"[^@;]*"),"");setCookieBrowser(section,valSection,null,expires,path,domain,secure)}}}else{document.cookie=name+"="+((path)?"; path="+path:"")+((domain)?"; domain="+domain:"")+"; expires=Thu, 01-Jan-70 00:00:01 GMT"}}
function fixDate(date){var base=new Date(0);var skew=base.getTime();if(skew>0){date.setTime(date.getTime()-skew)}}
function flipWithSign(foo){if(document.getElementById(foo).style.display=="none"){show(foo,!0,"showhide_headings");collapseSign("flipper"+foo)}else{hide(foo,!0,"showhide_headings");expandSign("flipper"+foo)}}
function setFlipWithSign(foo){if(getCookie(foo,"showhide_headings","o")=="o"){collapseSign("flipper"+foo);show(foo)}else{expandSign("flipper"+foo);hide(foo)}}
function expandSign(foo){if(document.getElementById(foo)){document.getElementById(foo).firstChild.nodeValue="[+]"}}
function collapseSign(foo){if(document.getElementById(foo)){document.getElementById(foo).firstChild.nodeValue="[-]"}}
function go(o){if(o.options[o.selectedIndex].value!==""){location.replace(o.options[o.selectedIndex].value);o.options[o.selectedIndex]=1}
return!1}
function targetBlank(url,mode){var features='menubar=yes,toolbar=yes,location=yes,directories=yes,fullscreen=no,titlebar=yes,hotkeys=yes,status=yes,scrollbars=yes,resizable=yes';switch(mode){case 'nw':break;case 'popup':features='menubar=no,toolbar=no,location=no,directories=no,fullscreen=no,titlebar=no,hotkeys=no,status=no,scrollbars=yes,resizable=yes';break;default:break}
window.open(url,'_blank',features)}
function confirmTheLink(theLink,theMsg){if(typeof(window.opera)!='undefined'){return!0}
var is_confirmed=confirm(theMsg);return is_confirmed}
function insertImgFile(elementId,fileId,oldfileId,type,page,attach_comment){var textarea=$('#'+elementId)[0];var fileup=$('input[name='+fileId+']')[0];var oldfile=$('input[name='+oldfileId+']')[0];var prefixEl=$('input[name=prefix]')[0];var prefix="img/wiki_up/";if(!textarea||!fileup){return}
if(prefixEl){prefix=prefixEl.value}
var filename=fileup.value,dirs,str;var oldfilename=oldfile.value;if(filename==oldfilename||filename===""){return}
oldfile.value=filename;if(filename.indexOf("/")>=0){dirs=filename.split("/");filename=dirs[dirs.length-1]}
if(filename.indexOf("\\")>=0){dirs=filename.split("\\");filename=dirs[dirs.length-1]}
if(filename.indexOf(":")>=0){dirs=filename.split(":");filename=dirs[dirs.length-1]}
if(type=="file"){str="{file name=\""+filename+"\"";var desc=$('#'+attach_comment).val();if(desc){str=str+" desc=\""+desc+"\""}
str=str+"}"}else{str="{img src=\"img/wiki_up/"+filename+"\" }\n"}
insertAt(elementId,str)}
var img_form_count=2,needToConfirm=!1;function addImgForm(){var new_text=document.createElement('span');new_text.setAttribute('id','picfile'+img_form_count);new_text.innerHTML='<input name=\'picfile'+img_form_count+'\' type=\'file\' onchange=\'insertImgFile("editwiki","picfile'+img_form_count+'","hasAlreadyInserted","img")\'/><br />';document.getElementById('new_img_form').appendChild(new_text);needToConfirm=!0;img_form_count ++}
browser();window.name='tiki';var fgals_window=null;function openFgalsWindow(filegal_manager_url,reload){if(fgals_window&&typeof fgals_window.document!="undefined"&&!fgals_window.closed){if(reload){fgals_window.location.replace(filegal_manager_url)}
fgals_window.focus()}else{fgals_window=window.open(filegal_manager_url,'_blank','menubar=1,scrollbars=1,resizable=1,height=500,width=800,left=50,top=50')}
$(window).on("unload",function(){fgals_window.close()})}
function wordCount(maxSize,source,cpt,message){var formcontent=source.value;var str=formcontent.replace(/^\s+|\s+$/g,'');formcontent=str.split(/[^\S]+/);if(maxSize>0&&formcontent.length>maxSize){alert(message);source.value=source.value.substr(0,source.value.length-1)}else{document.getElementById(cpt).value=formcontent.length}}
function charCount(maxSize,source,cpt,message){var formcontent=source.value.replace(/(\r\n|\n|\r)/g,'  ');if(maxSize>0&&formcontent.length>maxSize){alert(message);source.value=source.value.substr(0,maxSize)}else{document.getElementById(cpt).value=formcontent.length}}
var m_strUpperCase="ABCDEFGHIJKLMNOPQRSTUVWXYZ";var m_strLowerCase="abcdefghijklmnopqrstuvwxyz";var m_strNumber="0123456789";var m_strCharacters="!@#$%^&*?_~";function checkPassword(strPassword){var nScore=0;if(strPassword.length<5){nScore+=5}else if(strPassword.length>4&&strPassword.length<8){nScore+=10}else if(strPassword.length>7){nScore+=25}
var nUpperCount=countContain(strPassword,m_strUpperCase);var nLowerCount=countContain(strPassword,m_strLowerCase);var nLowerUpperCount=nUpperCount+nLowerCount;if(nUpperCount===0&&nLowerCount!==0){nScore+=10}else if(nUpperCount!==0&&nLowerCount!==0){nScore+=20}
var nNumberCount=countContain(strPassword,m_strNumber);if(nNumberCount==1){nScore+=10}
if(nNumberCount>=3){nScore+=20}
var nCharacterCount=countContain(strPassword,m_strCharacters);if(nCharacterCount==1){nScore+=10}
if(nCharacterCount>1){nScore+=25}
if(nNumberCount!==0&&nLowerUpperCount!==0){nScore+=2}
if(nNumberCount!==0&&nLowerUpperCount!==0&&nCharacterCount!==0){nScore+=3}
if(nNumberCount!==0&&nUpperCount!==0&&nLowerCount!==0&&nCharacterCount!==0){nScore+=5}
return nScore}
function runPassword(strPassword,strFieldID){var ctlBar=document.getElementById(strFieldID+"_bar");var ctlText=document.getElementById(strFieldID+"_text");var ctlTextInner=document.getElementById(strFieldID+"_text_inner");if(!ctlBar||!ctlText||!ctlTextInner){return}
if(strPassword.length>0){var nScore=checkPassword(strPassword);ctlBar.style.width=nScore+"%";var icon,strText,strColor;if(nScore>=90){icon='ok';strText=tr("Very Secure");strColor="#0ca908"}else if(nScore>=80){icon='ok';strText=tr("Secure");strColor="#0ca908"}else if(nScore>=70){icon='ok';strText=tr("Very Strong");strColor="#0ca908"}else if(nScore>=60){icon='ok';strText=tr("Strong");strColor="#0ca908"}else if(nScore>=40){icon='none';strText=tr("Average");strColor="#e3cb00"}else if(nScore>=25){icon='error';strText=tr("Weak");strColor="#ff0000"}else{icon='error';strText=tr("Very Weak");strColor="#ff0000"}
ctlBar.style.backgroundColor=strColor;$(ctlBar).show();if(icon==='none'){$(ctlText).children('span.icon').hide()}else if(icon==='ok'){$(ctlText).children('span.icon-ok').css('color',strColor).show();$(ctlText).children('span.icon-error').hide()}else if(icon==='error'){$(ctlText).children('span.icon-ok').hide();$(ctlText).children('span.icon-error').css('color',strColor).show()}
$(ctlTextInner).text(tr('Strength')+': '+strText).show()}else{$(ctlText).children().hide();$(ctlTextInner).hide();$(ctlBar).hide()}}
function countContain(strPassword,strCheck){var nCount=0,i;for(i=0;i<strPassword.length;i++){if(strCheck.indexOf(strPassword.charAt(i))>-1){nCount++}}
return nCount}
function checkPasswordsMatch(in1,in2,el){if($(in1).val().length){if($(in1).val()==$(in2).val()){$(el).children('#match').show();$(el).children('#nomatch').hide();return!0}else{$(el).children('#match').hide();$(el).children('#nomatch').show();return!1}}else{$(el).children().hide()}}
function pollsAddOption(){var newOption=$('<input />').attr('type','text').attr('name','options[]').attr('placeholder',tr('New option')).addClass('form-control');$('#tikiPollsOptions').append($('<div class="mb-2"></div>').append(newOption))}
function pollsToggleQuickOptions(){$('#tikiPollsQuickOptions').toggle(function(){var display=$('#tikiPollsQuickOptions').css('display');if(display==='none'){$('#tikiPollsOptionsButton').text(tr('Show Options'))}else{$('#tikiPollsOptionsButton').text(tr('Hide Options'))}})}
function hidedisabled(divid,value){if(value=='disabled'){document.getElementById(divid).style.display='none'}else{document.getElementById(divid).style.display='block'}}
function adjustThumbnails(){var i,j,h=0;var t=document.getElementById("thumbnails").childNodes;for(i=0;i<t.length;i++){if(t[i].className=="thumbnailcontener"){var t2=t[i].childNodes;for(j=0;j<t2.length;j++){if(t2[j].className=="thumbnail"){t2[j].style.height="100%";t2[j].style.overflow="visible"}}
if(t[i].offsetHeight>=h){h=t[i].offsetHeight}
t[i].style.height=h+"px"}}
for(i=0;i<t.length;i++){if(t[i].className=="thumbnailcontener"){if(t[i].offsetHeight<=h){t[i].style.height=h+"px"}else{break}}}}
function open_webdav(url){if(typeof ActiveXObject!='undefined'){var EditDocumentButton=new ActiveXObject("SharePoint.OpenDocuments.1");EditDocumentButton.EditDocument(url)}else{prompt(tr('URL to open this file with WebDAV'),url)}}
function ccsValueToInteger(str){var v=str.replace(/[^\d]*$/,"");if(v){v=parseInt(v,10)}
if(isNaN(v)){return 0}else{return v}}
function checkbox_list_check_all(form,list,checking){for(var checkbox in list){document.forms[form].elements[list[checkbox]].checked=checking}}
if(!window.syntaxHighlighter){window.syntaxHighlighter={get:function(){return null}}}
function tiki_encodeURI(rawstr){return encodeURI(rawstr)}
function tiki_decodeURI(encstr){return decodeURI(encstr.replace(/\+/g," "))}
function tiki_encodeURIComponent(rawstr){var str=encodeURIComponent(rawstr);return str}
function tiki_decodeURIComponent(encstr){var str=decodeURIComponent(encstr.replace(/\+/g," "));return str}
Date.prototype.toUnix=function(){return Math.round(this.getTime()/1000.0)};var UnixDate=function(unixDate){return new Date(unixDate*1000)};Date.parseUnix=function(date){date=new Date(Date.parse(date));return date.toUnix()};function adjustRating(element,data,vote){var $sibs,$help,$unvote;if(vote==="NULL"){$sibs=$("span > a",$(element).parent());$help=$(element).prev().prev();$unvote=$(element)}else{$sibs=$(element).siblings().addBack();$help=$(element).parent().next();$unvote=$help.nextAll("a")}
for(var i=0;i<$sibs.length;i++){var v=$($sibs[i]).data("vote"),icon="";if(v<=data[0].voteavg&&data[0].numvotes>0){if(data[0].result&&data[0].my_rate==v){icon='star-selected'}else{icon='star'}}else if(v-data[0].voteavg<=0.5&&data[0].numvotes>0){if(data[0].result&&data[0].my_rate==v){icon='star-half-selected'}else{icon='star-half-rating'}}else{if(data[0].result&&data[0].my_rate==v){icon='star-empty-selected'}else{icon='star-empty'}}
$($sibs[i]).find('.icon-'+icon).css('display','inline');$($sibs[i]).find('.icon').not('.icon-'+icon).css('display','none')}
var t=tr("Number of votes:")+" "+data[0].numvotes+", "+tr("Average:")+" "+data[0].voteavg;if(data[0].result){if(data[0].my_rate!="NULL"){t=t+", "+tr("Your rating:")+" "+data[0].my_rate;$unvote.show()}else{$unvote.hide()}}else{t=t+", "+tr("Vote not accepted")}
$help.text("("+data[0].numvotes+")").next().attr("title",t)}
function sendVote(element,itemId,fieldId,vote){$(element).parent().tikiModal(" ");$.getJSON($.service('tracker','vote',{i:itemId,f:fieldId,v:vote}),function(data){$(element).parent().tikiModal();adjustRating(element,data,vote)})}
function parseQuery(str){var arr,pair,key,val,out={},b1,b2,key2;if(str.substr(0,1)==="?"||str.substr(0,1)==="#"){str=str.substr(1)}
arr=str.split("&");for(var i=0;i<arr.length;i++){pair=arr[i].split("=");key=tiki_decodeURIComponent(pair[0]);val=pair.length>1?tiki_decodeURIComponent(pair[1]):"";if((b1=key.indexOf("["))>-1&&(b2=key.substr(b1+1).indexOf("]"))>-1){key2=key.substr(b1+1,b2);key=key.substr(0,b1);if(key2){if(typeof out[key]!="object"){out[key]={}}
out[key][key2]=val}else{if(typeof out[key]!="object"){out[key]=[]}
out[key].push(val)}}else{out[key]=val}}
return out}
document.addEventListener('DOMContentLoaded',function(){setTimeout(function(){var progressBar=document.getElementById("progressBar");if(progressBar){progressBar.remove()}},500)})