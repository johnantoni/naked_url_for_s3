inspired by http://wwwizer.com/ a dead simple naked domain redirector

/nginx
  ...config for nginx

/public_html
  ...php redirect that takes the HOST & REQUEST URL (minus www.) adds the www. and redirects them along
  ...perfect for amazon s3 hosted sites that don't support naked domain redirection
