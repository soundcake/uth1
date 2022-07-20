import React from 'react';
import Authenticated from '@/Layouts/Authenticated';
import {Head} from '@inertiajs/inertia-react';

export default function AdminDashboard(props) {
    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Admin Dashboard - only admins can
                access this page</h2>}
        >
            <Head title="Admin Dashboard"/>

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">Welcome, see all user details below
                        </div>
                    </div>
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="overflow-x-auto relative">
                            <table className="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" className="py-3 px-6">
                                        Name
                                    </th>
                                    <th scope="col" className="py-3 px-6">
                                        Email
                                    </th>
                                    <th scope="col" className="py-3 px-6">
                                        Role
                                    </th>
                                    <th scope="col" className="py-3 px-6">
                                        Bank Account(s)
                                    </th>
                                    <th scope="col" className="py-3 px-6">
                                        Credit Card(s)
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {props.users.map(function (user) {
                                    return (
                                        <tr className="bg-white dark:bg-gray-800">
                                            <th scope="row"
                                                className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {user.name}
                                            </th>
                                            <td className="py-4 px-6">
                                                {user.email}
                                            </td>
                                            <td className="py-4 px-6">
                                                {user.roles[0].name}
                                            </td>
                                            <td className="py-4 px-6">
                                                {user.accounts.map(function (account) {
                                                    return <li>{account.sort_code.toString().match(/.{1,2}/g).join('-')} - {account.account_number}</li>;
                                                })}
                                            </td>
                                            <td className="py-4 px-6">
                                                {user.cards.map(function (card) {
                                                    return <li>{card.card_number.match(/.{1,4}/g).join(' ')}</li>;
                                                })}
                                            </td>
                                        </tr>
                                    )
                                })}
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </Authenticated>
    );
}
