(function(window) {
    'use strict';

    window.SABThree = window.SABThree || {};

    window.SABThree.createAnimationController = function(context, objects, container) {
        let mouseX = 0;
        let mouseY = 0;
        let targetX = 0;
        let targetY = 0;
        let animationId;
        let isActive = true;

        const windowHalfX = window.innerWidth / 2;
        const windowHalfY = window.innerHeight / 2;

        function onDocumentMouseMove(event) {
            mouseX = (event.clientX - windowHalfX) * 0.001;
            mouseY = (event.clientY - windowHalfY) * 0.001;
        }

        function animate() {
            if (!isActive) return;
            animationId = requestAnimationFrame(animate);

            targetX = mouseX * 2;
            targetY = mouseY * 2;

            context.camera.position.x += (targetX - context.camera.position.x) * 0.05;
            context.camera.position.y += (-targetY - context.camera.position.y + 1) * 0.05;
            context.camera.lookAt(context.scene.position);

            const time = Date.now() * 0.001;

            objects.meshes.forEach((mesh, index) => {
                mesh.position.y = mesh.userData.originalY + Math.sin(time * mesh.userData.speed * 100 + index) * 0.5;
                mesh.rotation.x += mesh.userData.rotationSpeed.x;
                mesh.rotation.y += mesh.userData.rotationSpeed.y;
            });

            const particlePositions = objects.particles.geometry.attributes.position.array;
            for (let i = 0; i < objects.particleCount; i++) {
                particlePositions[i * 3 + 1] += Math.sin(time * 0.5 + i) * 0.002;
            }
            objects.particles.geometry.attributes.position.needsUpdate = true;
            objects.particles.rotation.y = time * 0.05;

            context.renderer.render(context.scene, context.camera);
        }

        function onWindowResize() {
            context.camera.aspect = window.innerWidth / window.innerHeight;
            context.camera.updateProjectionMatrix();
            context.renderer.setSize(window.innerWidth, window.innerHeight);
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    isActive = true;
                    animate();
                } else {
                    isActive = false;
                    if (animationId) {
                        cancelAnimationFrame(animationId);
                    }
                }
            });
        }, { threshold: 0.1 });

        function start() {
            document.addEventListener('mousemove', onDocumentMouseMove, false);
            window.addEventListener('resize', onWindowResize, false);
            observer.observe(container);
            animate();
        }

        function destroy() {
            isActive = false;
            if (animationId) {
                cancelAnimationFrame(animationId);
            }
            observer.disconnect();
            document.removeEventListener('mousemove', onDocumentMouseMove, false);
            window.removeEventListener('resize', onWindowResize, false);
            context.renderer.dispose();
        }

        return { start, destroy };
    };
})(window);
