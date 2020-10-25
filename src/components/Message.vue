<template>
  <div>
    <div v-for="(value, key, index) in shares" :key="index">
      <div class="message">
        <div class="flex">
          <p class="name">{{value.name}}</p>
          <img class="icon" src="../assets/heart.png" />
          <p class="number">{{value.like.length}}</p>
          <img class="icon" src="../assets/cross.png" />
          <img class="icon detail" src="../assets/detail.png" />
        </div>
        <p class="text">{{value.share}}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      shares: [{ name: "太郎", like: [], share: "初めまして" }]
    };
  }
};
</script>

<style scoped>
.flex {
  display: flex;
}
.icon {
  width: 25px;
  height: 25px;
}
.detail {
  margin-left: 50px;
}
.message {
  padding: 20px;
  border-bottom: solid 1px white;
  border-left: solid 1px white;
}
.name {
  font-size: 18px;
  font-weight: bold;
  margin-right: 10px;
}
.text {
  margin-top: 10px;
}
.number {
  margin-left: 10px;
  margin-right: 10px;
}
</style>