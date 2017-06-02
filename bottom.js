var editor = new MediumEditor('.editable', {
 toolbar: {
  buttons: ['bold', 'italic', 'underline', 'anchor', 'h1','h2', 'h3', 'quote'],
 }
});
var contentDOM = document.getElementById('content');
var content = contentDOM.innerHTML;

function save() {
 document.getElementById('data').value = contentDOM.innerHTML.replace(/(\r\n|\n|\r)/gm,'');
 
 document.getElementById('save').submit();
}