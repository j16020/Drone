function ohayou(){
  alert('Jacascript');

}

function func1() {
    var desk = document.getElementsByName("options");
    for(var i = 0; i < desk.length; i++){
      if(desk[i].checked) {
       console.log("checked:", desk[i].value);
        if(desk[i].value == "desk6"){

        }
      }
    }
}

var num = Number($(this).text().replace("ボタン", ""));

function del()
{
  num--;
  var objA = document.getElementById('piyo');
  var objPdel = document.getElementById('newP'); /*生成したpを取得*/
  objA.removeChild(objPdel); /*pを削除*/
}


function added()
{
  
  num++;
  var part = '<div class="box1"><div class="box2"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-secondary active"><input type="radio" name="options1' + (num) + '" id="option1" value="left" autocomplete="off" checked> 左</label><label class="btn btn-secondary"><input type="radio" name="options1' + (num) + '" id="option2" value="forward" autocomplete="off"> 前</label><label class="btn btn-secondary"><input type="radio" name="options1' + (num) + '" id="option3" value="back" autocomplete="off"> 後</label><label class="btn btn-secondary"><input type="radio" name="options1' + (num) + '" id="option3" value="right" autocomplete="off"> 右</label></div>に</div><div class="box2"><div class="box"　><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-secondary active"><input type="radio" name="options2' + (num) + '" id="option1" value="1" autocomplete="off" checked> 1</label><label class="btn btn-secondary"><input type="radio" name="options2' + (num) + '" id="option2" value="2" autocomplete="off"> 2</label><label class="btn btn-secondary"><input type="radio" name="options2' + (num) + '" id="option3" value="3" autocomplete="off"> 3</label><label class="btn btn-secondary"><input type="radio" name="options2' + (num) + '" id="option3" value="4" autocomplete="off"> 4</label></div>秒<input type="checkbox" name="options3' + (num) + '" id="option3" value="4" autocomplete="off">   撮影ポイント</div></div></div>'
  var objA = document.getElementById('piyo'); /*id名aのdivを取得*/
  var objP = document.createElement('div'); /*p要素を生成*/
  objP.innerHTML = part; /*pの中身を追加*/
  objP.id = 'newP'; /*pにidを追加*/
  
  objA.appendChild(objP); /*divにpを子として挿入*/
 

}







function add()
{
    var div_element = document.createElement("div");
    div_element.innerHTML = ' <div class="box"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-secondary active"><input type="radio" name="options3" id="option1" value="left" autocomplete="off" checked> 左</label><label class="btn btn-secondary"><input type="radio" name="options3" id="option2" value="forward" autocomplete="off"> 前</label><label class="btn btn-secondary"><input type="radio" name="options3" id="option3" value="back" autocomplete="off"> 後</label><label class="btn btn-secondary"><input type="radio" name="options3" id="option3" value="right" autocomplete="off"> 右</label></div></div><div class="box"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-secondary active"><input type="radio" name="options4" id="option1" value="1" autocomplete="off" checked> 1</label><label class="btn btn-secondary"><input type="radio" name="options4" id="option2" value="2" autocomplete="off"> 2</label><label class="btn btn-secondary"><input type="radio" name="options4" id="option3" value="3" autocomplete="off"> 3</label><label class="btn btn-secondary"><input type="radio" name="options4" id="option3" value="4" autocomplete="off"> 4</label></div><p style="color: azure;">秒</p></div>';
    var parent_object = document.getElementById("piyo");
    parent_object.appendChild(div_element);
}


function add1(){
  var original = $('#form_block\\[' + frm_cnt + '\\]');
  var originCnt = frm_cnt;
  var originVal = $("input[name='sex\\[" + frm_cnt + "\\]']:checked").val();

  frm_cnt++;

      original
          .clone()
          .hide()
          .insertAfter(original)
          .attr('id', 'form_block[' + frm_cnt + ']') // クローンのid属性を変更。
          .find("input[type='radio'][checked]").prop('checked', true)
          .end() // 一度適用する
          .find('input, textarea').each(function(idx, obj) {
              $(obj).attr({
                  id: $(obj).attr('id').replace(/\[[0-9]\]+$/, '[' + frm_cnt + ']'),
                  name: $(obj).attr('name').replace(/\[[0-9]\]+$/, '[' + frm_cnt + ']')
              });
              $(obj).val('');
          });

          var clone = $('#form_block\\[' + frm_cnt + '\\]');
      clone.children('span.close').show();
      clone.slideDown('slow');

      original.find("input[name='sex\\[" + originCnt + "\\]'][value='" + originVal + "']").prop('checked', true);

      var removeObj = $(this).parent();
        removeObj.fadeOut('fast', function() {
            removeObj.remove();
            // 番号振り直し
            frm_cnt = 0;
            $(".form-block[id^='form_block']").each(function(index, formObj) {
                if ($(formObj).attr('id') != 'form_block[0]') {
                    frm_cnt++;
                    $(formObj)
                        .attr('id', 'form_block[' + frm_cnt + ']') // id属性を変更。
                        .find('input, textarea').each(function(idx, obj) {
                            $(obj).attr({
                                id: $(obj).attr('id').replace(/\[[0-9]\]+$/, '[' + frm_cnt + ']'),
                                name: $(obj).attr('name').replace(/\[[0-9]\]+$/, '[' + frm_cnt + ']')
                            });
                        });
                }
            });
        });
}