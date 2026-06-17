/**
 * Three.js Background - Architectural Wireframe Effect
 * Bootstrap file. Scene, object creation, and animation logic live in assets/js/three/.
 */

(function(window) {
    'use strict';

    const container = document.getElementById('three-canvas');
    if (!container || !window.THREE || !window.SABThree) return;

    // Build the background from small modules so scene setup, objects, and animation stay maintainable.
    const context = window.SABThree.createSceneContext(container);
    const objects = window.SABThree.createArchitecturalObjects(context);
    const controller = window.SABThree.createAnimationController(context, objects, container);

    controller.start();

    window.addEventListener('beforeunload', () => {
        controller.destroy();
    });
})(window);
