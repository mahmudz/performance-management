let startPos = null
interact('.objective').draggable({
    inertia: true,
    modifiers: [

    ],
    onmove: dragMoveListener,
    onstart: function (event) {
        if (!startPos) {
          var rect = interact.getElementRect(event.target);
          startPos = {
            x: rect.left + rect.width  / 2,
            y: rect.top  + rect.height / 2
          }
        }
        event.target.classList.add('active');
    },
    onend: function (event) {
        event.target.classList.remove('active');

    }
})

function dragMoveListener(event) {
    var target = event.target
    var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
    var y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy
    target.style.webkitTransform = target.style.transform = 'translate(' + x + 'px, ' + y + 'px)'
    target.setAttribute('data-x', x)
    target.setAttribute('data-y', y)
}
window.dragMoveListener = dragMoveListener;


interact('.dropzone').dropzone({
    accept: '.objective',
    overlap: 0.75,
    ondropactivate: function (event) {
        event.target.classList.add('drop-active')
    },
    ondragenter: function (event) {
        var draggableElement = event.relatedTarget
        var dropzoneElement = event.target
        dropzoneElement.classList.add('drop-target')
        draggableElement.classList.add('can-drop')
    },
    ondragleave: function (event) {
        event.target.classList.remove('drop-target')
        event.relatedTarget.classList.remove('can-drop')
    },
    ondrop: function (event) {
        event.target.classList.remove('drop-active')
    },
    ondropdeactivate: function (event) {
        event.target.classList.remove('drop-active')
    }
});
