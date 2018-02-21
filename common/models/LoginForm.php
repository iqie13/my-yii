<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;
    public $reCaptcha;

    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            //For Captcha
            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LesBhUTAAAAAP_67HAt-IQ6GgwPxIcvN8NxULeQ', 'uncheckedMessage' => 'Please confirm that you are not a bot.']
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            $avatar = Avatar::find('WHERE status_id = 1 AND user_id = '. $this->getUser()->id)->one();
            $session = Yii::$app->session;
            $session->set('fullname', $this->getUser()->full_name);
            $session->set('join_date', date('M Y', strtotime($this->getUser()->created_at)));
            $session->set('ava_url', $avatar->ava_url);
            $session->set('ava_name', $avatar->ava_name);
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        }
        
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
