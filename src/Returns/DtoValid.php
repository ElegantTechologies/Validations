<?php
namespace SchoolTwist\Validations\Returns;


class DtoValid
{
    public function __construct(
        public bool $isValid,
        public string $enumReason = '',
        public string $message = '',
        public mixed $oldValue = null,
        public mixed $newValue = null,
    ){}
}


//class DtoValid {
//    /** @var boolean */
//    public $isValid;
//
//    /** @var string*/
//    public $enumReason = '';
//
//    /** @var string*/
//    public $message = '';
//
//    public $newValue;
//    public $oldValue;
//    public $offendingValue;
//    public function __construct(array $asrSubmission){
//        if (!isset($asrSubmission['isValid'])) {
//            throw new \TypeError('missing isValid');
//        }
//        if (!is_bool($asrSubmission['isValid'])) {
//            throw new \TypeError('isValid must be set to a boolean');
//        }
//        $this->isValid = $asrSubmission['isValid'];
//
//        if (isset($asrSubmission['enumReason'])) {
//            $this->enumReason = $asrSubmission['enumReason'];
//        }
//
//        if (isset($asrSubmission['message'])) {
//            $this->message = $asrSubmission['message'];
//        }
//
//        if (isset($asrSubmission['newValue'])) {
//            $this->newValue = $asrSubmission['newValue'];
//        }
//
//        if (isset($asrSubmission['oldValue'])) {
//            $this->oldValue = $asrSubmission['oldValue'];
//        }
//        if (isset($asrSubmission['offendingValue'])) {
//            $this->offendingValue = $asrSubmission['offendingValue'];
//        }
//    }
//
//    public function getMessage() {
//        if (empty($this->message)) {
//            if (empty($this->enumReason)) {
//                return "Generically invalid";
//            } else {
//                if ($this->enumReason == 'notAuthenticated') {
//                    return "You are not authorized to perform this action. ({$this->enumReason})";
//                } elseif ($this->enumReason == 'notNumeric') {
//                    return "Expected a numeric value.  ({$this->enumReason})";
//                } elseif ($this->enumReason == 'notNonNegative') {
//                    return "Expected non-negative value. ({$this->enumReason})";
//                } else {
//                    return $this->enumReason;
//                }
//            }
//        } else {
//            return $this->message;
//        }
//    }
//}