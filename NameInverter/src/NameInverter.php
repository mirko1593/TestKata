<?php 

namespace Inverter;

class NameInverter
{
    public function invert($name)
    {
        if (sizeof($name) <= 0 || $name === null) {
            return '';
        } else {
            $names = preg_split('/\s+/', trim($name));

            if (sizeof($names) === 1) {
                return $names[0];
            } else if ($this->isHonorific($names[0])) {
                array_shift($names);
            }
            if (sizeof($names) > 2) {
                $postNominal = $this->getPostNominals($names);
                return sprintf('%s, %s %s', $names[1], $names[0], $postNominal);
            }
            return sprintf('%s, %s', $names[1], $names[0]);
        }
    }

    protected function isHonorific($name)
    {
        return in_array($name, ['Mr.', 'Mrs.']);
    }

    protected function getPostNominals($names)
    {
        return implode(' ', array_slice($names, 2));
    }
}