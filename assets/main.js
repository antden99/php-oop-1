console.log("tutto ok");

const { createApp } = Vue;

createApp({
  data() {
    return {
      message: "Ciao !!",
    };
  },
}).mount("#app");
