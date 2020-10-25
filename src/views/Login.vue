<template>
  <div>
    <HeaderAuth />
    <div class="card">
      <p>新規登録</p>
      <div class="form">
        <input placeholder="メールアドレス" type="email" />
        <input placeholder="password" />
        <button>ログイン</button>
      </div>
    </div>
  </div>
</template>

<script>
import HeaderAuth from "../components/HeaderAuth";
export default{
  components: {
    HeaderAuth
  }
};
</script>

<style scoped>
button {
  width: 100px;
  text-align: center;
  padding: 8px 0 10px;
  color: #fff;
  background-color: #5419da;
  border-radius: 25px;
  cursor: pointer;
}
.card{
  margin: 100px auto;
  width: 350px;
  background-color:#fff;
  border-radius: 5px;
  padding: 20px;
}
.card p {
  color: black;
  font-weight: bold;
  text-align: center;
}
input{
  margin-top: 15px;
  width: 80%;
  border-radius: 10px;
  padding: 10px;
  border:1px solid black;
  color: black;
}
.form{
  text-align: center;
}
.form button {
  margin-top: 15px;
}

</style>