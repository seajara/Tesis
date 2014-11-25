<script language="javascript"> 
function move(tbFrom, tbTo) 
{
 var arrFrom = new Array(); var arrTo = new Array(); 
 var arrLU = new Array();
 var i;
 for (i = 0; i < tbTo.options.length; i++) 
 {
  arrLU[tbTo.options[i].text] = tbTo.options[i].value;
  arrTo[i] = tbTo.options[i].text;
 }
 var fLength = 0;
 var tLength = arrTo.length;
 for(i = 0; i < tbFrom.options.length; i++) 
 {
  arrLU[tbFrom.options[i].text] = tbFrom.options[i].value;
  if (tbFrom.options[i].selected && tbFrom.options[i].value != "") 
  {
   arrTo[tLength] = tbFrom.options[i].text;
   tLength++;
  }
  else 
  {
   arrFrom[fLength] = tbFrom.options[i].text;
   fLength++;
  }
}

tbFrom.length = 0;
tbTo.length = 0;
var ii;

for(ii = 0; ii < arrFrom.length; ii++) 
{
  var no = new Option();
  no.value = arrLU[arrFrom[ii]];
  no.text = arrFrom[ii];
  tbFrom[ii] = no;
}

for(ii = 0; ii < arrTo.length; ii++) 
{
 var no = new Option();
 no.value = arrLU[arrTo[ii]];
 no.text = arrTo[ii];
 tbTo[ii] = no;
}
}
</script>
<hr />  
<form name="combo_box" action="hola" method="post">
<table><tr><td>
<select multiple size="10" id="s1" name='FromLB' style="width:150">
<option value="one">one</option>
<option value="two">two</option>
<option value="three">three</option>
<option value="four">four</option>
<option value="five">five</option>
<option value="six">six</option>
<option value="seven">seven</option>
<option value="eight">eight</option>
<option value="nine">nine</option>
<option value="ten">ten</option>
</select>
</td>
<td align="center" valign="middle">
    <!--reconocer select por id y no por name -->
<input type="button" onClick="move(this.form.FromLB,this.form.ToLB)" value="->"><br />
<input type="button" onClick="move(this.form.ToLB,this.form.FromLB)" value="<-">
</td>
<td>
<select multiple size="10"  name="ToLB" style="width:150">
</select>
</td></tr></table>
    <input type="submit" value="Aceptar">  
</form>
<hr />