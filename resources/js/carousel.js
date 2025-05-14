// fungsi untuk buat carousel gambar

export default function carousel(images = []) { // fungsi nerima parameter array images
    console.log("Carousel initialized");
    return {
        active: 0,
        scrollCooldown: false,
        autoSlideTimer: null,
        userInteracted: false,
        interactionTimeout: null,   
        isHovered: false,
        images,
        
        init() {
            console.log("Carousel init");
            this.startAutoSlide(); // Mulai auto slide saat inisialisasi
            this.addKeyboardListener(); // Tambahkan listener keyboard saat inisialisasi
        },
        
        // fungsi unruk geser ke gambar selanjutnya
        next() {
            this.active = (this.active + 1) % this.images.length;
            console.log("Active index after next():", this.active);
        },

        // fungsi untuk geser ke gambar sebelumnya
        prev() {
            this.active = (this.active - 1 + this.images.length) % this.images.length;
            console.log("Active index after prev():", this.active);
        },

        // fungsi untuk geser ke gambar tertentu berdasarkan index (kalau dot dipencet)
        goTo(index) {
            this.active = index;
        },

        onScroll(event) {
            const isHorizontalScroll = Math.abs(event.deltaX) > Math.abs(event.deltaY);
            
            if (isHorizontalScroll) {
                event.preventDefault(); // selalu cegah scroll horizontal dari browser (back/forward gesture)

                if (!this.scrollCooldown) {
                    this.scrollCooldown = true;

                    if (event.deltaX > 0) this.next();
                    else if (event.deltaX < 0) this.prev();

                    setTimeout(() => { this.scrollCooldown = false; }, 1000); // 1 detik cooldown
                }
            }
            // kalau scroll vertikal, biarkan default 
        },

        addKeyboardListener() {
            let keyboardCooldown = false;
            
             window.addEventListener('keydown', (event) => {
                if (keyboardCooldown) return;
                if (event.key === 'ArrowRight') this.next();
                if (event.key === 'ArrowLeft') this.prev();
                keyboardCooldown = true;

                setTimeout(() => keyboardCooldown = false, 500);
            });
        },

        startAutoSlide() {
            const resetAutoSlide = () => {
                this.userInteracted = true;
                clearTimeout(this.interactionTimeout);
                clearTimeout(this.autoSlideTimer); // stop dulu auto slide saat user interaksi

                this.interactionTimeout = setTimeout(() => {
                    this.userInteracted = false;
                    this.autoSlide(); // mulai lagi setelah 5 detik tidak interaksi
                }, 5000); // tunda 5 detik setelah interaksi terakhir
            };

            ['click', 'mousemove', 'keydown', 'touchstart', 'wheel'].forEach(eventType => {
                window.addEventListener(eventType, resetAutoSlide);
            });

            // autoSlide pertama kali
            this.autoSlide();
        },

        autoSlide() {
            if (this.userInteracted) {
                console.log("User is interacting, auto slide paused.");
                return;
            } // jangan lanjut kalau user masih aktif
            this.autoSlideTimer = setTimeout(() => {
                this.next();
                this.autoSlide();
            }, 8000); // auto-slide tiap 8 detik
        }
    };
}