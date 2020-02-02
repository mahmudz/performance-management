// interact('.dropbox').dropzone({
//   accept: '.pool-objective',
//   overlap: 0.75,
//   ondropactivate: function (event) {
//     event.target.classList.add('drop-active')
//   },
//   ondragenter: function (event) {
//     var draggableElement = event.relatedTarget
//     var dropzoneElement = event.target
//     dropzoneElement.classList.add('drop-target')
//     draggableElement.classList.add('can-drop')
//     draggableElement.textContent = 'Dragged in'
//   },
//   ondragleave: function (event) {
//     // remove the drop feedback style
//     event.target.classList.remove('drop-target')
//     event.relatedTarget.classList.remove('can-drop')
//     event.relatedTarget.textContent = 'Dragged out'
//   },
//   ondrop: function (event) {
//     event.relatedTarget.textContent = 'Dropped'
//   },
//   ondropdeactivate: function (event) {
//     event.target.classList.remove('drop-active')
//     event.target.classList.remove('drop-target')
//   }
// })

// function dragMoveListener (event) {
//   var target = event.target
//   var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
//   var y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy

//   target.style.webkitTransform =
//     target.style.transform =
//       'translate(' + x + 'px, ' + y + 'px)'

//   target.setAttribute('data-x', x)
//   target.setAttribute('data-y', y)
// }

// window.dragMoveListener = dragMoveListener
// interact('.pool-objective')
//   .draggable({
//     inertia: true,
//     modifiers: [
//       interact.modifiers.restrictRect({
//         restriction: 'parent',
//         endOnly: true
//       })
//     ],
//     autoScroll: true,
//     onmove: dragMoveListener
//   })

