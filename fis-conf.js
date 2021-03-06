// fis.match('::packager', {
//   spriter: fis.plugin('csssprites')
// });

// fis.match('*', {
//   useHash: false
// });

// fis.match('*.js', {
//   optimizer: fis.plugin('uglify-js')
// });

// fis.match('*.css', {
//   useSprite: true,
//   optimizer: fis.plugin('clean-css')
// });

// fis.match('*.png', {
//   optimizer: fis.plugin('png-compressor')
// });


//配置如何发布到远端的服务器qa
fis.media('qa').match('*', {
  deploy: fis.plugin('http-push', {
    receiver: 'http://47.94.172.49/fis/receiver.php',
    to: '/var/www/html/hyblog' // 注意这个是指的是测试机器的路径，而非本地机器
  })
});
fis.match('*', {
    //访问url是/hyblog/xxx
    url : '/hylog$0'
});


//以debug发布时，排除一些设置
fis.media('debug').match('*.{js,css,png}', {
  useHash: false,
  useSprite: false,
  optimizer: null
})