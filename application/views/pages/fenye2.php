

    <style type="text/css">
      #contentWrap{
border: solid #ccc 1px;
line-height: 30px;
padding: 5px 0;
padding-right: 25px;
/*需要指定输入框和内容span的字体一致，*/
font-size: 12px;
font-family: arial;
  }
  #input{
margin-left: 0;
width:10px; 
border: none; 
/*否则输入框会默认使用不一样的字体*/
font-size: 12px;
font-family: arial;
padding: 0;
  }
    </style>



    <span id="contentWrap"><span id="content"><input id="input"></span></span>    

<script>
var inputEl = document.getElementById('input');
var contentWrapEl = document.getElementById('contentWrap');
var contentEl = document.getElementById('content');
contentWrapEl.onclick=function(){
inputEl.focus();
}

inputEl.onkeydown = function(e){
if(typeof(event)!='undefined'){
e = event;
}
if(e.keyCode==8){
var text = contentEl.innerHTML;
var len = text.length;
if(len==0){
return;
}
contentEl.innerHTML = text.substring(0, len-1);
return;
}
contentEl.innerHTML = contentEl.innerHTML + inputEl.value;
inputEl.value = '';
// 根据具体业务需求，还需要处理很多事件，比如
// 还需要处理选中效果，光标插入效果
// 还需要提供一个隐藏域，用它保存输入的值，便于form提交。
}
</script>