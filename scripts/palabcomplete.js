$(document).ready(function(){
  $(function() {
    function listen(id){

      var nodeArray = $('[id="'+id+'"]');
      Object.keys(nodeArray).forEach((key, idx)=>{
        if(typeof nodeArray[key]=="object" && idx<Object.keys(nodeArray).length-1)
        {
          $(nodeArray[key]).on("keydown", function(event) {
            if (event.keyCode === $.ui.keyCode.TAB &&
              $(this).autocomplete("instance").menu.active) {
              event.preventDefault();
            }
          }).on("focusout", function(event) {
            $(this).removeClass('active');
          })
          .autocomplete({
            source: function(request, response) {
              $.ajax({
                url: "php/palabcomplete2.php",
                dataType: "json",
                data: {
                  search_text: request.term,
                  max_rows: 12,
                },
                success: function(res) {
                    $(nodeArray[key]).addClass('active');
                    response(res.data);
                }
              });
            },
            minLength: 3,
            focus: function() {
              return false;
            },
            select: function(event, ui) {
                $(nodeArray[key]).removeClass('active');
              this.value = ui.item.value;
              return false;
            },
            open: function(event, ui) {
              $("ul.ui-autocomplete").css("z-index", 5000);
            }
          });
        }
      })
    }

    listen("palabcomplete");
    listen("palabcomplete2");
    listen("palabcomplete3");
    listen("palabcompleteresp");
    listen("palabcompleteresult");

    var initialized = false;
    $(window).on('resize', function(){
      if($(window).width()<=1024 && !initialized)
      {
        listen("palabcomplete");
        listen("palabcomplete2");
        listen("palabcomplete3");
        listen("palabcompleteresp");
        listen("palabcompleteresult");
        initialized = true;
      }
    })
  })
})
