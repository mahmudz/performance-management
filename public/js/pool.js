$(document).ready(function(){
    $( ".objective" ).draggable({ revert: 'invalid' });

    $( ".objective-source" ).droppable({
        drop: function( event, ui ) {
            var $this = $(this);
            ui.draggable.position({
                my: "center",
                at: "center",
                of: $this,
                using: function(pos) {
                    $(this).animate(pos, 200, "linear");
                }
            });
            ui.draggable.css('width', '100%');
            axios.post("/remove-from-list", {
                'objective_id': parseInt(ui.draggable.attr('data-id'))
            }).then(function(response) {
                if (response.data.status == false) {
                    alert(response.data.message)
                }
            });
        }

    });

    $( ".dropzone" ).droppable({
        classes: {
            "ui-droppable-active": "ui-state-active",
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function( event, ui ) {
            var $this = $(this);
            ui.draggable.position({
                my: "center",
                at: "center",
                of: $this,
                using: function(pos) {
                    $(this).animate(pos, 200, "linear");
                }
            });
            ui.draggable.css('width', '100%');

            axios.post("/add-to-list", {
                'objective_id': ui.draggable.attr('data-id')
            }).then(function(response) {
                if (response.data.status == false) {
                    alert(response.data.message)
                }
            });
        }
    });
});
