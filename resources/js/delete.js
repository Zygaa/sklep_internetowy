$(function(){
  $('.delete').click(function(e) {
    $.ajax({
      method: "DELETE",
      url: `/users/${e.target.getAttribute('data-user-id')}`,
    })
    .done(function ( response ) {
        Swal.fire("Usunięto");
    })
    .fail(function ( response ) {
        Swal.fire("ERROR");
    });
 });
});
