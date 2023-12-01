const { createApp } = Vue;

createApp({
  data() {
    return {
      apiurl: "server.php",
      list: [],
      newTask: "",
    };
  },
  created() {
    axios.get(this.apiurl).then((response) => {
      this.list = response.data;
    });
  },
}).mount("#app");
