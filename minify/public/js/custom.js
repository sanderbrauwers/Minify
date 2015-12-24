$(document).ready(function(){
  $(".delete").click(function(){
    if (!confirm("Are u sure you want to delete this?")){
      return false;
    }
  });
});