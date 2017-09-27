<?php
namespace Services\Calculator;
/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


interface CalculatorIf extends \Services\Shared\SharedIf {
  /**
   */
  public function ping();
  /**
   * @param int $num1
   * @param int $num2
   * @return int
   */
  public function add($num1, $num2);
  /**
   * @param int $logid
   * @param \Services\Calculator\Work $w
   * @return int
   * @throws \Services\Calculator\InvalidOperation
   */
  public function calculate($logid, \Services\Calculator\Work $w);
  /**
   */
  public function zip();
}


class CalculatorClient extends \Services\Shared\SharedClient implements \Services\Calculator\CalculatorIf {
  public function __construct($input, $output=null) {
    parent::__construct($input, $output);
  }

  public function ping()
  {
    $this->send_ping();
    $this->recv_ping();
  }

  public function send_ping()
  {
    $args = new \Services\Calculator\Calculator_ping_args();
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'ping', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('ping', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_ping()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Services\Calculator\Calculator_ping_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Services\Calculator\Calculator_ping_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    return;
  }

  public function add($num1, $num2)
  {
    $this->send_add($num1, $num2);
    return $this->recv_add();
  }

  public function send_add($num1, $num2)
  {
    $args = new \Services\Calculator\Calculator_add_args();
    $args->num1 = $num1;
    $args->num2 = $num2;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'add', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('add', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_add()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Services\Calculator\Calculator_add_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Services\Calculator\Calculator_add_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("add failed: unknown result");
  }

  public function calculate($logid, \Services\Calculator\Work $w)
  {
    $this->send_calculate($logid, $w);
    return $this->recv_calculate();
  }

  public function send_calculate($logid, \Services\Calculator\Work $w)
  {
    $args = new \Services\Calculator\Calculator_calculate_args();
    $args->logid = $logid;
    $args->w = $w;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'calculate', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('calculate', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_calculate()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Services\Calculator\Calculator_calculate_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Services\Calculator\Calculator_calculate_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->ouch !== null) {
      throw $result->ouch;
    }
    throw new \Exception("calculate failed: unknown result");
  }

  public function zip()
  {
    $this->send_zip();
  }

  public function send_zip()
  {
    $args = new \Services\Calculator\Calculator_zip_args();
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'zip', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('zip', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
}


// HELPER FUNCTIONS AND STRUCTURES

class Calculator_ping_args {
  static $_TSPEC;


  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        );
    }
  }

  public function getName() {
    return 'Calculator_ping_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Calculator_ping_args');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Calculator_ping_result {
  static $_TSPEC;


  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        );
    }
  }

  public function getName() {
    return 'Calculator_ping_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Calculator_ping_result');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Calculator_add_args {
  static $_TSPEC;

  /**
   * @var int
   */
  public $num1 = null;
  /**
   * @var int
   */
  public $num2 = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'num1',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'num2',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['num1'])) {
        $this->num1 = $vals['num1'];
      }
      if (isset($vals['num2'])) {
        $this->num2 = $vals['num2'];
      }
    }
  }

  public function getName() {
    return 'Calculator_add_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->num1);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->num2);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Calculator_add_args');
    if ($this->num1 !== null) {
      $xfer += $output->writeFieldBegin('num1', TType::I32, 1);
      $xfer += $output->writeI32($this->num1);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->num2 !== null) {
      $xfer += $output->writeFieldBegin('num2', TType::I32, 2);
      $xfer += $output->writeI32($this->num2);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Calculator_add_result {
  static $_TSPEC;

  /**
   * @var int
   */
  public $success = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'Calculator_add_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->success);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Calculator_add_result');
    if ($this->success !== null) {
      $xfer += $output->writeFieldBegin('success', TType::I32, 0);
      $xfer += $output->writeI32($this->success);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Calculator_calculate_args {
  static $_TSPEC;

  /**
   * @var int
   */
  public $logid = null;
  /**
   * @var \Services\Calculator\Work
   */
  public $w = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'logid',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'w',
          'type' => TType::STRUCT,
          'class' => '\Services\Calculator\Work',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['logid'])) {
        $this->logid = $vals['logid'];
      }
      if (isset($vals['w'])) {
        $this->w = $vals['w'];
      }
    }
  }

  public function getName() {
    return 'Calculator_calculate_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->logid);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->w = new \Services\Calculator\Work();
            $xfer += $this->w->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Calculator_calculate_args');
    if ($this->logid !== null) {
      $xfer += $output->writeFieldBegin('logid', TType::I32, 1);
      $xfer += $output->writeI32($this->logid);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->w !== null) {
      if (!is_object($this->w)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('w', TType::STRUCT, 2);
      $xfer += $this->w->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Calculator_calculate_result {
  static $_TSPEC;

  /**
   * @var int
   */
  public $success = null;
  /**
   * @var \Services\Calculator\InvalidOperation
   */
  public $ouch = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::I32,
          ),
        1 => array(
          'var' => 'ouch',
          'type' => TType::STRUCT,
          'class' => '\Services\Calculator\InvalidOperation',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['ouch'])) {
        $this->ouch = $vals['ouch'];
      }
    }
  }

  public function getName() {
    return 'Calculator_calculate_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->success);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->ouch = new \Services\Calculator\InvalidOperation();
            $xfer += $this->ouch->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Calculator_calculate_result');
    if ($this->success !== null) {
      $xfer += $output->writeFieldBegin('success', TType::I32, 0);
      $xfer += $output->writeI32($this->success);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->ouch !== null) {
      $xfer += $output->writeFieldBegin('ouch', TType::STRUCT, 1);
      $xfer += $this->ouch->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Calculator_zip_args {
  static $_TSPEC;


  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        );
    }
  }

  public function getName() {
    return 'Calculator_zip_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Calculator_zip_args');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class CalculatorProcessor extends \Services\Shared\SharedProcessor {
  public function __construct($handler) {
    parent::__construct($handler);
  }
  public function process($input, $output) {
    $rseqid = 0;
    $fname = null;
    $mtype = 0;
    $input->readMessageBegin($fname, $mtype, $rseqid);
    $methodname = 'process_'.$fname;
    if (!method_exists($this, $methodname)) {
      $input->skip(TType::STRUCT);
      $input->readMessageEnd();
      $x = new TApplicationException('Function '.$fname.' not implemented.', TApplicationException::UNKNOWN_METHOD);
      $output->writeMessageBegin($fname, TMessageType::EXCEPTION, $rseqid);
      $x->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
      return;
    }
    $this->$methodname($rseqid, $input, $output);
    return true;
  }
  protected function process_ping($seqid, $input, $output) {
    $args = new \Services\Calculator\Calculator_ping_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new \Services\Calculator\Calculator_ping_result();
    $this->handler_->ping();
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'ping', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('ping', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_add($seqid, $input, $output) {
    $args = new \Services\Calculator\Calculator_add_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new \Services\Calculator\Calculator_add_result();
    $result->success = $this->handler_->add($args->num1, $args->num2);
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'add', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('add', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_calculate($seqid, $input, $output) {
    $args = new \Services\Calculator\Calculator_calculate_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new \Services\Calculator\Calculator_calculate_result();
    try {
      $result->success = $this->handler_->calculate($args->logid, $args->w);
    } catch (\Services\Calculator\InvalidOperation $ouch) {
      $result->ouch = $ouch;
    }
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'calculate', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('calculate', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_zip($seqid, $input, $output) {
    $args = new \Services\Calculator\Calculator_zip_args();
    $args->read($input);
    $input->readMessageEnd();
    $this->handler_->zip();
    return;
  }
}


