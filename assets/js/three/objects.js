(function(window) {
    'use strict';

    window.SABThree = window.SABThree || {};

    window.SABThree.createArchitecturalObjects = function(context) {
        const meshes = [];
        const planeCount = 15;
        const planeGeometry = new THREE.PlaneGeometry(2, 2);

        for (let i = 0; i < planeCount; i++) {
            const material = new THREE.MeshBasicMaterial({
                color: i % 2 === 0 ? context.goldColor : context.goldLight,
                transparent: true,
                opacity: 0.08,
                side: THREE.DoubleSide,
                wireframe: i % 3 === 0
            });

            const mesh = new THREE.Mesh(planeGeometry, material);
            mesh.position.x = (Math.random() - 0.5) * 12;
            mesh.position.y = (Math.random() - 0.5) * 8;
            mesh.position.z = (Math.random() - 0.5) * 6 - 2;
            mesh.rotation.x = Math.random() * Math.PI;
            mesh.rotation.y = Math.random() * Math.PI;
            mesh.userData = {
                originalY: mesh.position.y,
                speed: 0.002 + Math.random() * 0.003,
                rotationSpeed: {
                    x: (Math.random() - 0.5) * 0.005,
                    y: (Math.random() - 0.5) * 0.005
                }
            };

            context.scene.add(mesh);
            meshes.push(mesh);
        }

        const particleCount = 200;
        const particleGeometry = new THREE.BufferGeometry();
        const positions = new Float32Array(particleCount * 3);

        for (let i = 0; i < particleCount; i++) {
            positions[i * 3] = (Math.random() - 0.5) * 15;
            positions[i * 3 + 1] = (Math.random() - 0.5) * 10;
            positions[i * 3 + 2] = (Math.random() - 0.5) * 8;
        }

        particleGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

        const particleMaterial = new THREE.PointsMaterial({
            color: context.goldColor,
            size: 0.03,
            transparent: true,
            opacity: 0.6
        });

        const particles = new THREE.Points(particleGeometry, particleMaterial);
        context.scene.add(particles);

        const gridHelper = new THREE.GridHelper(20, 20, context.goldColor, 0x2a2a2a);
        gridHelper.position.y = -3;
        gridHelper.material.opacity = 0.15;
        gridHelper.material.transparent = true;
        context.scene.add(gridHelper);

        return {
            meshes,
            particles,
            particleCount
        };
    };
})(window);
