<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https//devscakes.com/</loc>
    </url>
    <url>
        <loc>http://example.com/about</loc>
    </url>
    {!! @foreach($posts as $post)
        <url>
            <loc>https://example.com/blog/{{ $post->slug }}</loc>
        </url>
    @endforeach!!}
</urlset>