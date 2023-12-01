const { createApp } = Vue;

createApp({
  data() {
    return {
      apiurl: "server.php",
      list: [],
      newTask: "",
    };
  },
  methods: {
    postTask() {
      const data = new FormData();
      data.append("task", this.newTask);
      axios.post(this.apiurl, data).then((response) => {
        console.log(response.data);
        this.list = response.data;
      });
      this.newTask = "";
    },
  },
  created() {
    axios.get(this.apiurl).then((response) => {
      this.list = response.data;
    });
  },
}).mount("#app");
