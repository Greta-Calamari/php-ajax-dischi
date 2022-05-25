const app = new Vue({
  el: "#app",
  data: {
    dischi: [],
    categories: [],
    selectedCategory: "",
  },
  methods: {
    getData() {
      axios.get("server.php").then((res) => {
        //   console.log(res);
        this.dischi = res.data;
        //   console.log(this.dischi);
        this.dischi.forEach((disco) => {
          if (!this.categories.includes(disco.genre)) {
            this.categories.push(disco.genre);
          }
        });
      });
    },

    search() {
      console.log(this.selectedCategory);
      //   this.getData();
    },
  },
  mounted() {
    this.getData();
  },
});
