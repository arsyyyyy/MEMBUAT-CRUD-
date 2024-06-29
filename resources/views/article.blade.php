<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Laravel #24 : Relasi One To Many Eloquent</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet"> <!-- Perbaikan tanda kutip -->
</head>
<body>
 
<div class="container"> <!-- Perbaikan tanda kutip -->
    <div class="card mt-5">
        <div class="card-body">
            <h3 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h3>
            <h5 class="text-center my-4">Eloquent One To Many Relationship</h5>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Judul Article</th>
                        <th>Tag</th>
                        <th width="15%" class="text-center">Jumlah Tag</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article) <!-- Perbaikan tanda kurung kurawal -->
                        <tr>
                            <td>{{ $article->judul }}</td> <!-- Perbaikan tanda panah -->
                            <td>
                                @foreach($article->tags as $tag) <!-- Perbaikan tanda panah -->
                                    {{ $tag->tag }},
                                @endforeach
                            </td>
                            <td class="text-center">{{ $article->tags->count() }}</td> <!-- Perbaikan tanda panah -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
 
</body>
</html>
