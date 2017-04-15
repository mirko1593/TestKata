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
            } else {
                $this->removeHonorific($names);
                $postNominal = $this->getPostNominals($names);

                return $this->formatName($names, $postNominal);
            }
        }
    }

    protected function removeHonorific(&$names)
    {
        if ($this->isHonorific($names[0])) {
            array_shift($names);
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

    protected function formatName($names, $postNominal)
    {
        return trim(sprintf('%s, %s %s', $names[1], $names[0], $postNominal));
    }
}