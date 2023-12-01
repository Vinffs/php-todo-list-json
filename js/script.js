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
        this.list = response.data;
      });
      this.newTask = "";
    },
    removeTask(index) {
      const data = new FormData();
      data.append("removeTask", index);
      axios.post(this.apiurl, data).then((response) => {
        this.list = response.data;
      });
    },
  },
  created() {
    axios.get(this.apiurl).then((response) => {
      this.list = response.data;
    });
  },
}).mount("#app");
