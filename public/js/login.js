$('.ui .form')
  .form({
    fields: {
      email : 'empty',
      password : ['minLength[6]', 'empty']
    }
  });
