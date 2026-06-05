/**
 * Three.js Background - Architectural Wireframe Effect
 * Creates floating geometric planes and particles for hero section
 */

(function() {
    'use strict';

    const container = document.getElementById('three-canvas');
    if (!container) return;

    // Scene setup
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

    // Create architectural wireframe elements
    const geometries = [];
    const materials = [];
    const meshes = [];

    // Gold color palette
    const goldColor = 0xc9a96e;
    const goldLight = 0xe0c999;

    // Create floating planes (architectural panels)
    const planeCount = 15;
    const planeGeometry = new THREE.PlaneGeometry(2, 2);

    for (let i = 0; i < planeCount; i++) {
        const material = new THREE.MeshBasicMaterial({
            color: i % 2 === 0 ? goldColor : goldLight,
            transparent: true,
            opacity: 0.08,
            side: THREE.DoubleSide,
            wireframe: i % 3 === 0
        });

        const mesh = new THREE.Mesh(planeGeometry, material);
        
        // Random positioning
        mesh.position.x = (Math.random() - 0.5) * 12;
        mesh.position.y = (Math.random() - 0.5) * 8;
        mesh.position.z = (Math.random() - 0.5) * 6 - 2;
        
        // Random rotation
        mesh.rotation.x = Math.random() * Math.PI;
        mesh.rotation.y = Math.random() * Math.PI;
        
        // Store original position for animation
        mesh.userData = {
            originalY: mesh.position.y,
            speed: 0.002 + Math.random() * 0.003,
            rotationSpeed: {
                x: (Math.random() - 0.5) * 0.005,
                y: (Math.random() - 0.5) * 0.005
            }
        };

        scene.add(mesh);
        meshes.push(mesh);
    }

    // Create particle system
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
        color: goldColor,
        size: 0.03,
        transparent: true,
        opacity: 0.6
    });

    const particles = new THREE.Points(particleGeometry, particleMaterial);
    scene.add(particles);

    // Add subtle grid lines (architectural feel)
    const gridHelper = new THREE.GridHelper(20, 20, goldColor, 0x2a2a2a);
    gridHelper.position.y = -3;
    gridHelper.material.opacity = 0.15;
    gridHelper.material.transparent = true;
    scene.add(gridHelper);

    // Mouse interaction
    let mouseX = 0;
    let mouseY = 0;
    let targetX = 0;
    let targetY = 0;

    const windowHalfX = window.innerWidth / 2;
    const windowHalfY = window.innerHeight / 2;

    document.addEventListener('mousemove', onDocumentMouseMove, false);

    function onDocumentMouseMove(event) {
        mouseX = (event.clientX - windowHalfX) * 0.001;
        mouseY = (event.clientY - windowHalfY) * 0.001;
    }

    // Animation loop
    let animationId;
    let isActive = true;

    function animate() {
        if (!isActive) return;
        animationId = requestAnimationFrame(animate);

        // Smooth camera movement based on mouse
        targetX = mouseX * 2;
        targetY = mouseY * 2;

        camera.position.x += (targetX - camera.position.x) * 0.05;
        camera.position.y += (-targetY - camera.position.y + 1) * 0.05;
        camera.lookAt(scene.position);

        // Animate floating planes
        const time = Date.now() * 0.001;
        
        meshes.forEach((mesh, index) => {
            // Floating motion
            mesh.position.y = mesh.userData.originalY + Math.sin(time * mesh.userData.speed * 100 + index) * 0.5;
            
            // Slow rotation
            mesh.rotation.x += mesh.userData.rotationSpeed.x;
            mesh.rotation.y += mesh.userData.rotationSpeed.y;
        });

        // Animate particles
        const particlePositions = particles.geometry.attributes.position.array;
        for (let i = 0; i < particleCount; i++) {
            particlePositions[i * 3 + 1] += Math.sin(time * 0.5 + i) * 0.002;
        }
        particles.geometry.attributes.position.needsUpdate = true;
        particles.rotation.y = time * 0.05;

        renderer.render(scene, camera);
    }

    animate();

    // Handle resize
    function onWindowResize() {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    }

    window.addEventListener('resize', onWindowResize, false);

    // Pause when not visible (performance optimization)
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

    observer.observe(container);

    // Cleanup on page unload
    window.addEventListener('beforeunload', () => {
        isActive = false;
        if (animationId) {
            cancelAnimationFrame(animationId);
        }
        observer.disconnect();
        renderer.dispose();
    });
})();
