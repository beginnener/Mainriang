export default function multiItemCarousel(images = []) {
  // // Append a plain box (kotak polos) to the images array
  // const kotakPolos1 = { type: 'box', id: 'placeholder' };
  // const kotakPolos2 = { type: 'box', id: 'placeholder' };
  images = [...images];

  return {
    images,
    currentIndex: 0,
    itemWidth: 0,
    visibleItems: 3,

    init() {
      this.$nextTick(() => {
        const firstItem = document.querySelector('#carousel-track img');
        if (firstItem) this.itemWidth = firstItem.offsetWidth + 16; // 16 dari mx-2

        // Optionally make visibleItems responsive
        this.updateVisibleItems();
        window.addEventListener('resize', this.updateVisibleItems);
      });
    },

    updateVisibleItems() {
      const width = window.innerWidth;
      if (width < 768) this.visibleItems = 1;
      else if (width < 1024) this.visibleItems = 2;
      else this.visibleItems = 3;
    },

    next() {
      if (this.currentIndex < this.images.length - this.visibleItems) {
        this.currentIndex++;
      }
    },

    prev() {
      if (this.currentIndex > 0) this.currentIndex--;
    },

    lihatSelengkapnya() {
      console.log("Lihat Selengkapnya clicked");
      window.location.href = '/galeri'; // ganti sesuai kebutuhan
    }
  };
}
