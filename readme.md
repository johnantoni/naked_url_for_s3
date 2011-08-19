## Naked URL redirect for Amazon S3

### The Problem

You host a static site on S3, runs perfectly on your www.mysite.com domain but there's 
no way to do redirect mysite.com -> www.mysite.com on your DNS without setting up a specific 
site, creating a redirect etc. annoying.

### (A) Solution

Inspired by http://wwwizer.com/ here's a dead simple naked url redirector. 
How this works is you place it on your server (nginx config supplied) to respond to any direct 
ip requests. In your DNS records create an A Record for your site (sans www.) e.g.:

    domain name: mysite.com

    Host:   Value:
    @       191.321.321.321 (your ip address)


And there you go, your server will receive mysite.com, add the www. to the start and redirect it
along preserving any request parameters.

Not perfect but a minimal fix for something un-supported.


### File Contents

    /nginx
      ...config for nginx

    /public_html
      ...php redirect that takes the HOST & REQUEST URL (minus www.) adds the www. and redirects them along
      ...perfect for amazon s3 hosted sites that don't support naked domain redirection
