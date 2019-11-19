function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
	
 var term=document.getElementById("term_row"+no);
 var def=document.getElementById("def_row"+no);
	
 var term_data=term.innerHTML;
 var def_data=def.innerHTML;
	
 term.innerHTML="<input type='text' id='term_text"+no+"' value='"+term_data+"'>";
 def.innerHTML="<input type='text' id='def_text"+no+"' value='"+def_data+"'>";
}

function save_row(no)
{
 var term_val=document.getElementById("term_text"+no).value;
 var def_val=document.getElementById("def_text"+no).value;

 document.getElementById("term_row"+no).innerHTML=term_val;
 document.getElementById("def_row"+no).innerHTML=def_val;

 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row()
{
 var new_term=document.getElementById("new_term").value;
 var new_def=document.getElementById("new_def").value;
	
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+
 "'><td id='term_row"+table_len+"'>"+new_term+"" +
 		"</td><td id='def_row"+table_len+"'>"+new_def+
 		"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> " +
 				"<input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'>" +
 				" <input type='button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_term").value="";
 document.getElementById("new_def").value="";
}