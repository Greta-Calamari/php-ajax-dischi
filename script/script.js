const app = new Vue({
  el: "#app",
  data: {
    dischi: [],
    categories: [],
    selectedCategory: "",
    apiPath: "./server.php",
  },
  methods: {
    getData(genre = null) {
      let path = this.apiPath;
      if (genre) {
        path = this.apiPath + "?genre=" + genre;
      }
      axios.get(path).then((res) => {
        //   console.log(res);
        this.dischi = res.data;
        //   console.log(this.dischi);
        if (this.categories.length < 1) {
          this.dischi.forEach((disco) => {
            if (!this.categories.includes(disco.genre)) {
              this.categories.push(disco.genre);
            }
          });
        }
      });
    },

    search() {
      //   console.log(this.selectedCategory);
      this.getData(this.selectedCategory);
    },
  },
  mounted() {
    this.getData();
  },
});
