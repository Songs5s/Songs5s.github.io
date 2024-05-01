;(function($) {
  $.fn.numberAnimate = function(setting) {
    var defaults = {
      speed : 2000,//�����ٶ�
      num : "", //��ʼ��ֵ
      iniAnimate : true, //�Ƿ�Ҫ��ʼ������Ч��
      symbol : '',//Ĭ�ϵķָ���ţ�ǧ����ǧ��
      dot : 0 //������λС����
    }
    //���settingΪ�գ���ȡdefault��ֵ
    var setting = $.extend(defaults, setting);
  
    //��������ж������ʾ����
    if($(this).length > 1){
      alert("just only one obj!");
      return;
    }
  
    //���δ���ó�ʼ��ֵ����ʾ����
    if(setting.num == ""){
      alert("must set a num!");
      return;
    }
    var nHtml = '<div class="mt-number-animate-dom" data-num="{{num}}">\
            <span class="mt-number-animate-span">0</span>\
            <span class="mt-number-animate-span">1</span>\
            <span class="mt-number-animate-span">2</span>\
            <span class="mt-number-animate-span">3</span>\
            <span class="mt-number-animate-span">4</span>\
            <span class="mt-number-animate-span">5</span>\
            <span class="mt-number-animate-span">6</span>\
            <span class="mt-number-animate-span">7</span>\
            <span class="mt-number-animate-span">8</span>\
            <span class="mt-number-animate-span">9</span>\
            <span class="mt-number-animate-span">.</span>\
          </div>';
  
    //���ִ���
    var numToArr = function(num){
      num = parseFloat(num).toFixed(setting.dot);
      if(typeof(num) == 'number'){
        var arrStr = num.toString().split("");  
      }else{
        var arrStr = num.split("");
      }
      //console.log(arrStr);
      return arrStr;
    }
  
    //����DOM symbol:�ָ����
    var setNumDom = function(arrStr){
      var shtml = '<div class="mt-number-animate">';
      for(var i=0,len=arrStr.length; i<len; i++){
        if(i != 0 && (len-i)%3 == 0 && setting.symbol != "" && arrStr[i]!="."){
          shtml += '<div class="mt-number-animate-dot">'+setting.symbol+'</div>'+nHtml.replace("{{num}}",arrStr[i]);
        }else{
          shtml += nHtml.replace("{{num}}",arrStr[i]);
        }
      }
      shtml += '</div>';
      return shtml;
    }
  
    //ִ�ж���
    var runAnimate = function($parent){
      $parent.find(".mt-number-animate-dom").each(function() {
        var num = $(this).attr("data-num");
        num = (num=="."?10:num);
        var spanHei = $(this).height()/11; //11ΪԪ�ظ���
        var thisTop = -num*spanHei+"px";
        if(thisTop != $(this).css("top")){
          if(setting.iniAnimate){
            //HTML5��֧��
            if(!window.applicationCache){
              $(this).animate({
                top : thisTop
              }, setting.speed);
            }else{
              $(this).css({
                'transform':'translateY('+thisTop+')',
                '-ms-transform':'translateY('+thisTop+')',   /* IE 9 */
                '-moz-transform':'translateY('+thisTop+')',  /* Firefox */
                '-webkit-transform':'translateY('+thisTop+')', /* Safari �� Chrome */
                '-o-transform':'translateY('+thisTop+')',
                '-ms-transition':setting.speed/1000+'s',
                '-moz-transition':setting.speed/1000+'s',
                '-webkit-transition':setting.speed/1000+'s',
                '-o-transition':setting.speed/1000+'s',
                'transition':setting.speed/1000+'s'
              }); 
            }
          }else{
            setting.iniAnimate = true;
            $(this).css({
              top : thisTop
            });
          }
        }
      });
    }
  
    //��ʼ��
    var init = function($parent){
      //��ʼ��
      $parent.html(setNumDom(numToArr(setting.num)));
      runAnimate($parent);
    };
  
    //���ò���
    this.resetData = function(num){
      var newArr = numToArr(num);
      var $dom = $(this).find(".mt-number-animate-dom");
      if($dom.length < newArr.length){
        $(this).html(setNumDom(numToArr(num)));
      }else{
        $dom.each(function(index, el) {
          $(this).attr("data-num",newArr[index]);
        });
      }
      runAnimate($(this));
    }
    //init
    init($(this));
    return this;
  }
})(jQuery);
  
$(function(){
  
  //��ʼ��
  var numRun = $(".numberRun").numberAnimate({num:'15343242.10', dot:2, speed:2000, symbol:","});
  var nums = 15343242.10;
  setInterval(function(){
    nums+= 3433.24;
    numRun.resetData(nums);
  },3000);
  
   function get_cookie(Name) {
   var search = Name + "="//��ѯ������ֵ
   var returnvalue = "";//����ֵ
   if (document.cookie.length > 0) {
     sd = document.cookie.indexOf(search);
     if (sd!= -1) {
        sd += search.length;
        end = document.cookie.indexOf(";", sd);
        if (end == -1)
         end = document.cookie.length;
         //unescape() �����ɶ�ͨ�� escape() ������ַ������н��롣
        returnvalue=unescape(document.cookie.substring(sd, end))
      }
   } 
   return returnvalue;
}

		var day=new Date();
		day.setDate(day.getDate()+365)
	if(get_cookie("nums2")==''){ 
		document.cookie='nums2=153842450;expires='+day;
	} 

  
  var numRun2 = $(".numberRun2").numberAnimate({num:get_cookie("nums2"), speed:2000, symbol:","});
  var nums2 =parseInt(get_cookie("nums2"));
  setInterval(function(){
	nums2+=89;
	document.cookie="nums2="+nums2+';expires='+day;
    numRun2.resetData(nums2);
  },3000);
  
 


 
  
  var numRun3 = $(".numberRun3").numberAnimate({num:'52353434.343', dot:3, speed:2000});
  var nums3 = 52353434.343;
  setInterval(function(){
    nums3+= 454.521;
    numRun3.resetData(nums3);
  },4000);
  
  var numRun4 = $(".numberRun4").numberAnimate({num:'52353434', speed:2000});
  var nums4 = 52353434;
  setInterval(function(){
    nums4+= 123454;
    numRun4.resetData(nums4);
  },3500);
  
});