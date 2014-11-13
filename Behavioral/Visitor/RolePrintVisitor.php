<?php


class RolePrintVisitor implements RoleVisitorInterface
{
    /**
     * {@inheritdoc}
     */
    public function visitGroup(Group $role)
    {
        echo "Role: " . $role->getName() . '</br>';
    }

    /**
     * {@inheritdoc}
     */
    public function visitUser(User $role)
    {
        echo "Role: " . $role->getName() . '</br>';
    }
}
