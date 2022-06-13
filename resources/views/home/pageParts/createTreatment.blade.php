<div style="width: 60%; margin: auto">
    <form action="{{ route('user.createTreatmentByDoctor') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="userId" value="{{ $user_id }}">
        <div class="form-group">
            <label for="exampleInputEmail1">Tedavi adı :</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Anahtar kelimeler :</label>
            <input type="text" name="keywords" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Açıklama :</label>
            <input type="text" name="description"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="">Resim :</label>
            <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kategori :</label>
            <input type="text" name="categoryId" value="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Detay :</label>
            <input type="text" name="detail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Fiyat :</label>
            <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sıklık (hafta cinsinden):</label>
            <input type="text" name="frequency" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Süreç (ne kadar süreceği ay cinsinden) :</label>
            <input type="text" name="duration" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <select class="form-control" name="status">
            <option value="Staged">Staged</option>
            <option value="Online">Online</option>
        </select>
        <input style="margin-top: 50px" class="btn btn-primary" type="submit" value="Tedaviyi ekle">
    </form>
</div>

