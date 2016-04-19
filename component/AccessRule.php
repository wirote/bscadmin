<?php

namespace app\component;
/**
 * Description of AccessRule
 *
 * @author Wirote
 */
class AccessRule extends \yii\filters\AccessRule {
    protected function matchRole($user) {
        if (empty($this->roles)) {
            return TRUE;
        }
        foreach ($this->roles as $role) {
            if ($role === '?') {
                if ($user->getIsGuest()) {
                    return TRUE;
                }
            } elseif ($role === '@') {
                if (!$user->getIsGuest()) {
                    return TRUE;
                }
            } elseif (!$user->getIsGuest() && $role === $user->identity->roles) {
                return TRUE;
            }
        }
        return FALSE;
    }
}
