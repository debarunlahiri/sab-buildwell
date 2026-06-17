(function(window) {
    'use strict';

    window.SABThree = window.SABThree || {};

    window.SABThree.createSceneContext = function(container) {
        const scene = new THREE.Scene();
        scene.fog = new THREE.FogExp2(0x0a0a0a, 0.02);

        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        camera.position.z = 5;
        camera.position.y = 1;

        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        renderer.setClearColor(0x0a0a0a, 1);
        container.appendChild(renderer.domElement);

        return {
            scene,
            camera,
            renderer,
            goldColor: 0xc9a96e,
            goldLight: 0xe0c999
        };
    };
})(window);
