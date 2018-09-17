$(document).ready(function () {
    $('#myForm')//对应的表单做验证
        .bootstrapValidator({
            message: 'This value is not valid',//全局的出错消息配置
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',//验证成功的图标
                invalid: 'glyphicon glyphicon-remove',//验证失败的图标
                validating: 'glyphicon glyphicon-refresh'//异步验证ajax
            },
            //对那些字段验证，注意使用name属性
            fields: {
                //对用户名做验证
                username: {
                    message: '用户名验证失败',
                    //验证的规则
                    validators: {
                        //非空验证
                        notEmpty: {
                            message: '用户名必须填写',
                        },
                        //长度验证
                        stringLength: {
                            min: 6,//最少字符
                            max: 12,//最多字符
                            message: '用户名长度必须在6~12位之间'
                        }
                    }
                }
                , email: {
                    validators: {
                        notEmpty: {
                            message: 'email不能为空'
                        },
                        emailAddress: {
                            message: '请输入正确的邮件地址如：123@qq.com'
                        }
                    }
                }
                , phone: {
                    validators: {
                        notEmpty: {
                            message: '手机号不能为空'
                        },
                        regexp: {
                            regexp: "^([0-9]{11})?$",
                            message: '手机号码格式错误'
                        }
                    }
                }
                ,
                password: {
                    message: '密码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 18, //最大
                            message: '密码长度必须在6~18位之间'
                        }
                    }
                },
                repeatPassword: {
                    message: '确认密码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '确认密码必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 18, //最大
                            message: '确认密码长度必须在6~18位之间'
                        },
                        //密码相同性的验证
                        identical: {
                            field: 'password', //对哪个字段做比较
                            message: '两次输入的密码不一致'
                        }
                    }
                },

            }
        })
        .on('success.form.bv', function (e) {
            // 阻止表单的默认行为
            e.preventDefault();

            // 获取表单的实例
            var $form = $(e.target);

            // 获取验证实例
            var bv = $form.data('bootstrapValidator');

            //使用ajax提交表单数据
            var reqUrl = "./api/userAdd.php";
            var data = $form.serialize();
            $.post(reqUrl, data, function (result) {
                //console.log(result);
                //根据后端的结果处理前端的业务逻辑
                if (result.isSuccess) {
                    alert(result.msg);
                    location.href="./login.php";
                }
                else {
                    alert(result.msg);
                }
            }, 'json');
        });

 //-------------------------------------登录表单的验证和提交--------------------------------------


        $('#login')//对应的表单做验证
        .bootstrapValidator({
            message: 'This value is not valid',//全局的出错消息配置
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',//验证成功的图标
                invalid: 'glyphicon glyphicon-remove',//验证失败的图标
                validating: 'glyphicon glyphicon-refresh'//异步验证ajax
            },
            //对那些字段验证，注意使用name属性
            fields: {
                //对用户名做验证
                username: {
                    message: '用户名验证失败',
                    //验证的规则
                    validators: {
                        //非空验证
                        notEmpty: {
                            message: '用户名必须填写',
                        },
                        //长度验证
                        stringLength: {
                            min: 6,//最少字符
                            max: 12,//最多字符
                            message: '用户名长度必须在6~12位之间'
                        }
                    }
                },
                password: {
                    message: '密码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 18, //最大
                            message: '密码长度必须在6~18位之间'
                        }
                    }
                },
                
            }
        })
        .on('success.form.bv', function(e) {
            // 阻止表单的默认提交行为
            e.preventDefault();
    
            // 获取表单实例
            var $form = $(e.target);
    
            // 获取验证实例
            var bv = $form.data('bootstrapValidator');
    
            // 使用AJAX提交表单数据
            var reqUrl="./api/userCheck.php"; //请求地址
           var data=$form.serialize(); //表单数据
            $.post(reqUrl, data, function(result) {
                console.log("api返回的结果",result);
                //根据后端的结果处理前端的业务逻辑
                if(result.isSuccess){
                    //alert(result.msg);
                    //1. 设置蒙层的标题
                    $("#msgShowTitle").text("登录成功")  
                    //2. 设置蒙层的内容
                    $("#msgShowContent").html(`<span class='glyphicon glyphicon-ok'></span> ${result.msg}，等待<span id
                    ='num'>6</span>秒后跳转到个人中心`);
                    //定时器修改等待的数字
                    let num=6;
                    var timesID=setInterval(()=>{
                       num--;
                       $("#num").text(num);
                       if(num==0){
                           clearInterval(timesID);
                           location.href="./userInfo.php";//跳转到登录页面
                       }
                    },1000);
                }else{
                    //失败
                    //alert(result.msg);
                    //1. 设置蒙层的标题
                    $("#msgShowTitle").text("登录失败");

                    //2. 设置蒙层的内容
                    $("#msgShowContent").html("<span class='glyphicon glyphicon-remove'></span> "+result.msg);
                }
                //3. 显示蒙层
                $('#msgShowModal').modal('show');
            }, 'json');
        });
    });