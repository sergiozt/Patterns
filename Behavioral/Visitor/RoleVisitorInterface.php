<?php


interface RoleVisitorInterface
{
    /**
     * Visit a User object
     * 
     * @param User $role
     */
    public function visitUser(User $role);

    /**
     * Visit a Group object
     * 
     * @param Group $role
     */
    public function visitGroup(Group $role);
}
