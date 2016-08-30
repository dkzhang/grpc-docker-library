<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: helloworld.proto
//   Date: 2016-10-17 02:29:58

namespace helloworld {

  class HelloRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'helloworld.HelloRequest');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \helloworld\HelloRequest
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \helloworld\HelloRequest
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace helloworld {

  class HelloReply extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $message = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'helloworld.HelloReply');

      // OPTIONAL STRING message = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "message";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <message> has a value
     *
     * @return boolean
     */
    public function hasMessage(){
      return $this->_has(1);
    }
    
    /**
     * Clear <message> value
     *
     * @return \helloworld\HelloReply
     */
    public function clearMessage(){
      return $this->_clear(1);
    }
    
    /**
     * Get <message> value
     *
     * @return string
     */
    public function getMessage(){
      return $this->_get(1);
    }
    
    /**
     * Set <message> value
     *
     * @param string $value
     * @return \helloworld\HelloReply
     */
    public function setMessage( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace helloworld {

  class GreeterClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts) {
      parent::__construct($hostname, $opts);
    }
    /**
     * @param helloworld\HelloRequest $input
     */
    public function SayHello(\helloworld\HelloRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/helloworld.Greeter/SayHello', $argument, '\helloworld\HelloReply::deserialize', $metadata, $options);
    }
  }
}
