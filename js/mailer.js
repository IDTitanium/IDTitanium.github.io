function mailer(){
'use strict';
const nodemailer = require(['./node_modules/nodemailer/lib/nodemailer']);

var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var subject = document.getElementById("subject").value;
var msg = document.getElementById("msg").value;
    // Generate test SMTP service account from ethereal.email
// Only needed if you don't have a real mail account for testing
//nodemailer.createTestAccount((err, account) => {
    // create reusable transporter object using the default SMTP transport
    var transporter = nodemailer.createTransport({
        service: 'gmail',
        auth: {
          user: 'currentvoltage82@gmail.com',
          pass: 'passwork'
        }
      });
    

    // setup email data with unicode symbols
    let mailOptions = {
        from: name + email, // sender address
        to: 'idriseun222@gmail.com', // list of receivers
        subject: 'Message from portfolio website', // Subject line
        text: msg, // plain text body
        html: msg // html body
    };

    // send mail with defined transport object
    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            return console.log(error);
        }
       // console.log('Message sent: %s', info.messageId);
        // Preview only available when sending through an Ethereal account
      //  console.log('Preview URL: %s', nodemailer.getTestMessageUrl(info));

        // Message sent: <b658f8ca-6296-ccf4-8306-87d57a0b4321@example.com>
        // Preview URL: https://ethereal.email/message/WaQKMgKddxQDoou...
    });
//});
}
