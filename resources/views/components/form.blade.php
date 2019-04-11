<div class="form-container">
  <form action="/hello" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name">
    <button type="submit">送信</button>
  </form>
</div>