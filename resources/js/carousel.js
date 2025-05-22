// Fungsi untuk membuat carousel gambar

export default function carousel(images = []) {
    return {
        active: 0,
        scrollCooldown: false,
        scrollDeltaX: 0,
        autoSlideTimer: null,
        interactionTimeout: null,
        pointerStartX: 0,
        pointerEndX: 0,
        isPointerDown: false,
        images,

        // Inisialisasi carousel
        init() {
            this.$el.setAttribute('tabindex', '0'); // Tambahkan tabindex untuk fokus
            console.log("Carousel init");
            this.enableAutoFocusOnView();
            this.startAutoSlide();
            this.addKeyboardListener();
            this.addSwipeAndWheelListener();
        },

        // Geser ke gambar selanjutnya
        next() {
            this.active = (this.active + 1) % this.images.length;
            console.log("Active index after next():", this.active);
        },

        // Geser ke gambar sebelumnya
        prev() {
            this.active = (this.active - 1 + this.images.length) % this.images.length;
            console.log("Active index after prev():", this.active);
        },

        // Geser ke gambar tertentu berdasarkan index
        goTo(index) {
            this.active = index;
        },

        // Fokus otomatis saat muncul di layar
        enableAutoFocusOnView() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        setTimeout(() => { 
                            console.log("Focusing on element");
                            this.$el.focus({ preventSroll: true });
                            this.$el.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                        }, 100); // 100ms
                    }
                });
            }, {
                threshold: 0.5, // 50% elemen terlihat
            });

            observer.observe(this.$el);
        },

        addSwipeAndWheelListener() {
            this.$el.addEventListener('pointerdown', (e) => {
                this.isPointerDown = true;
                this.pointerStartX = e.clientX;
            });

            this.$el.addEventListener('pointermove', (e) => {
                if (!this.isPointerDown) return;
                this.pointerEndX = e.clientX;
            });

            this.$el.addEventListener('pointerup', () => {
                if (!this.isPointerDown) return;

                const delta = this.pointerEndX - this.pointerStartX;
                if (Math.abs(delta) > 50) {
                    delta < 0 ? this.next() : this.prev();
                    this.handleInteraction();
                }

                this.isPointerDown = false;
            });

            this.$el.addEventListener('wheel', (e) => {
                const isHorizontalScroll = Math.abs(event.deltaX) > Math.abs(event.deltaY);

                if (isHorizontalScroll) {
                    console.log("Horizontal scroll detected");
                    e.preventDefault();

                    this.scrollDeltaX += e.deltaX;

                    if (Math.abs(this.scrollDeltaX) > 50 && !this.scrollCooldown) {
                        this.scrollCooldown = true;

                        if (this.scrollDeltaX > 0) this.next();
                        else this.prev();

                        this.handleInteraction();

                        // Reset delta dan cooldown
                        this.scrollDeltaX = 0;
                        setTimeout(() => {
                            this.scrollCooldown = false;
                        }, 500);
                    }
                }
            });
        },

        // Event listener keyboard untuk geser gambar pakai arrow key
        addKeyboardListener() {
            let keyboardCooldown = false;

            this.$el.addEventListener('keydown', (e) => {
                if (keyboardCooldown) return;

                if (e.key === 'ArrowRight') this.next();
                else if (e.key === 'ArrowLeft') this.prev();

                this.handleInteraction();
                keyboardCooldown = true;

                setTimeout(() => {
                    keyboardCooldown = false;
                }, 500);
            });
        },

        // Fungsi auto slide
        autoSlide() {
            this.autoSlideTimer = setTimeout(() => {
                this.next();
                this.autoSlide();
            }, 5000);
        },

        // Memulai auto slide dan event listener untuk interaksi user
        startAutoSlide() {
            const interactionEvents = ['click', 'touchstart', 'wheel'];

            interactionEvents.forEach(eventType => {
                this.$el.addEventListener(eventType, () => {
                    this.handleInteraction();
                });
            });

            this.autoSlide();
        },

        // Memulai dan menghentikan auto slide sementara jika ada interaksi user
        handleInteraction() {
            clearTimeout(this.interactionTimeout);
            clearTimeout(this.autoSlideTimer);

            this.interactionTimeout = setTimeout(() => {
                this.autoSlide();
            }, 8000);
        }
    };
}