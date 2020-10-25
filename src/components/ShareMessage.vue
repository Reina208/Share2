<template>
 <div class="share">
   <p>シェア</p>
   <textarea></textarea>
   <div>
     <button>シェアする</button>
   </div>
 </div>
</template>

<style scoped>
.share {
  margin: 15px;
}
.share textarea {
  width: 95%;
  height: 120px;
  margin-top: 15px;
  margin-bottom: 15px;
  border-radius: 10px;
  border: 1px solid white;
  background-color: #15202b;
  color: white;
  resize: none;
}
button {
  width: 100px;
  text-align: center;
  padding: 8px 0 10px;
  color: #fff;
  background-color: #5419da;
  border-radius: 25px;
  display: block;
  margin: 0 0 0 auto;
}
</style>
