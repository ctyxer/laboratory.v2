const PhotoAlbum = {
    data() {
      return {
        index: -1,
        photos: [
          {
            title: "Бокал и кот",
            photo:
              "AlbumPhotos/бокал.jpg",
            alt: "Бокал",
            comment: "Котик смотрит через бокал"
          },
          {
            title: "Шар и кот",
            photo:
              "AlbumPhotos/в шаре.jpg",
            alt: "Шар",
            comment: "Котик и шар"
          },
          {
            title: "Кот",
            photo:
              "AlbumPhotos/кот.jpg",
            alt: "Альтернативный текст кот",
            comment: "Кот"
          },
          {
            title: "Маленький кот",
            photo:
              "AlbumPhotos/маленький.jpg",
            alt: "Альтернативный текст и маленький кот",
            comment: "Коментарий к фотографии"
          },
          {
            title: "Котенок мечтает",
            photo:
              "AlbumPhotos/мечтает.jpg",
            alt: "Альтернативный текст",
            comment: "Коментарий к фотографии"
          },
          {
            title: "Испачкался",
            photo:
              "AlbumPhotos/мокрый.jpg",
            alt: "Альтернативный текст",
            comment: "Коментарий к фотографии"
          },
          {
            title: "Наелся",
            photo:
              "AlbumPhotos/наелся.jpg",
            alt: "Альтернативный текст",
            comment: "Коментарий к фотографии"
          },
          {
            title: "Сидит",
            photo:
              "AlbumPhotos/сидит.jpg",
            alt: "Альтернативный текст",
            comment: "Коментарий к фотографии"
          },
          {
            title: "Кот1",
            photo:
              "img/cat1.jpg",
            alt: "Альтернативный текст кот1",
            comment: "Коментарий к фотографии кот1"
          },
          {
            title: "кот2",
            photo:
              "img/cat1.jpg",
            alt: "Альтернативный текст кот1",
            comment: "Коментарий к фотографии кот1"
          },
          {
            title: "кот3",
            photo:
              "img/cat1.jpg",
            alt: "Альтернативный текст кот1",
            comment: "Коментарий к фотографии кот1"
          },
          {
            title: "кот4",
            photo:
              "img/cat1.jpg",
            alt: "Альтернативный текст кот1",
            comment: "Коментарий к фотографии кот1"
          },
          {
            title: "кот5",
            photo:
              "img/cat1.jpg",
            alt: "Альтернативный текст кот1",
            comment: "Коментарий к фотографии кот1"
          },
          {
            title: "кот6",
            photo:
              "img/cat1.jpg",
            alt: "Альтернативный текст кот1",
            comment: "Коментарий к фотографии кот1"
          },
          {
            title: "кот7",
            photo:
              "img/cat1.jpg",
            alt: "Альтернативный текст кот1",
            comment: "Коментарий к фотографии кот1"
          }
        ]
      };
    }
  };
  
  const app = Vue.createApp(PhotoAlbum);
  
  app.component("album-item", {
    props: ["package"],
    emits: ["click"],
    template: `
          <span class="album-item" @click="$emit('click')">
              <img :src="package.photo" :alt="package.alt">
          </span>
      `,
    data() {
      return {
        isOpened: false
      };
    }
  });
  
  app.component("img-popup", {
    props: ["photos", "index"],
    emits: ["close"],
    template: `
          <teleport to="body">
          <div class="img_popup" @click.self="$emit('close')">
              <button type="button" class="to_left" @click="previous">&#8249;</button>
              <div class="content">
                  <img :src="photos[id].photo" :alt="photos.alt">
                  <div class="text">
                      <h2>{{photos[id].title}}</h2>
                      <p>{{photos[id].comment}}</p>
                  </div>
              </div>
              <button type="button" class="to_right" @click="next">&#8250;</button>
          </div>
      </teleport>
      `,
    data() {
      return {
        id: this.$props.index
      };
    },
    methods: {
      previous: function () {
        if (!this.id) {
          this.id = this.$props.photos.length - 1;
        } else {
          this.id--;
        }
      },
      next: function () {
        if (this.id === this.$props.photos.length - 1) {
          this.id = 0;
        } else {
          this.id++;
        }
      }
    }
  });
  
  app.mount("#app");