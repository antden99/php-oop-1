console.log("tutto ok");

const { createApp } = Vue;

createApp({
  data() {
    return {
      message: "Hello Vue!",
    };
  },
}).mount("#app");
