<div class="divformAvis">
    <form action="{{route("avis.store")}}" method='POST'  enctype="multipart/form-data" class="formavis">
  <h3 class="formTitle">Nous aimerions connaître votre opinion!</h3>
      @csrf
      <div class="form-group">
        <label for="rating">Votre note</label>
        <div class="ratingContainer">
          <div class="star-widget">
            <input type="radio" name="rate" id="rate-5" value="5">
            <label for="rate-5" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-4" value="4">
            <label for="rate-4" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-3" value="3">
            <label for="rate-3" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-2" value="2">
            <label for="rate-2" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-1" value="1">
            <label for="rate-1" class="fas fa-star"></label>
          </div>
        </div>
      </div>
      
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div><br>
    <div class="form-group">
        <label for="avis">Votre avis</label><br>
        <textarea name="avis" cols="30" rows="4">{{ old('avis') }}</textarea>
        @error('avis')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div><br>
    <div class="form-group">
        <label for="image">Votre image</label>
        <input type="file" class="form-control-file" name="image">
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <button href="{{route('add_to_cart', $produit->id)}}" type="submit" class="btn btn-primary BtnAvis">Soumettre</button>
</form>
<br>
</div><br>
  {{-- <script>
    const btn = document.querySelector("button");
    const post = document.querySelector(".post");
    const widget = document.querySelector(".star-widget");
    const editBtn = document.querySelector(".edit");
    btn.onclick = ()=>{
      widget.style.display = "none";
      post.style.display = "block";
      editBtn.onclick = ()=>{
        widget.style.display = "block";
        post.style.display = "none";
      }
      return false;
    }
  </script> --}}
</div>